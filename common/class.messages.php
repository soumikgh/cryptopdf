<?php
/**
 * @property Point_model $point_model
 * @property Message_model $message_model
 */
class Messages
{

    public $msgCipherTextJSArray;
    public $msgThemesJSArray;
    public $msgDifficultyJSArray;
    public $paginationHtml;
    private $pagination;
    private $point_model;
    private $message_model;

    function __construct( $db, $boardId = '0', $limitOffset = null, $showAll = false )
    {
        if ( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception( 'invalid db object' );
        }

        $this->point_model = new Point_model( $this->db );
        $this->message_model = new Message_model( $this->db, $boardId, getUserId() );
        $orders = $this->get_sort_order();
        $this->messages = $this->message_model->getMessagesPaginate( null, $orders, $limitOffset, $showAll );

        $this->processMessages();

        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'];

        // do count
        // $total = $this->message_model->getMessages( null, null, null, true );
        $total = $this->message_model->countMessages( $showAll );

        $config['total_rows'] = $total;
        $config['per_page'] = MSG_PER_BOARD;
        $config['type'] = isset( $_GET['type'] ) ? $_GET['type'] : NULL;
        $config['dir'] = isset( $_GET['dir'] ) ? $_GET['dir'] : NULL;
        $config['groupId'] = isset( $_GET['groupId'] ) ? $_GET['groupId'] : NULL;

        if ( !empty( $page ) ) {
            $config['cur_page'] = $page;
        }

        $this->pagination = new Pagination();
        $this->pagination->initialize( $config );
        $this->paginationHtml = $this->pagination->createLinks();
    }

    function processMessages( $limitOffset = null )
    {
        $this->msgCipherTextJSArray = '[""';
        $this->msgThemesJSArray = '[""';
        $this->msgDifficultyJSArray = '[""';
        $this->msgMessageTextJSArray = '[""';
        $this->msgPublishedJSArray = '[""';
        $this->msgMessageIdsJSArray = '[""';
        $this->msgCiphersJSArray = '[""';
        $this->msgDecryptedByJSArray = '[""';
        $this->msgKeyAByJSArray = '[""';
        $this->msgKeyBByJSArray = '[""';
        $this->msgCipherIdsJSArray = '[""';
        $this->msgCrackedJSArray = '[""';
        $this->msgCopied = '[""';
        $this->msgCipherPointsJSArray = '[""';
        // default value for showCipher checkbox is false
        $this->msgShowCiphersJSArray = '[true';

        $breaks = array( "\r\n", "\n", "\r" );


        if( !empty( $this->messages ) && is_array( $this->messages ) ) {
            foreach ( $this->messages as $message ) {

                $this->msgCipherTextJSArray .= ',"' . str_replace( $breaks, "",nl2br(  htmlspecialchars( $message['cipher_text'], ENT_QUOTES, 'UTF-8' ) ) ) . '"';
                $this->msgThemesJSArray .= ',"' . $message['theme_id'] . '"';
                $this->msgDifficultyJSArray .= ',"' . $message['difficulty_id'] . '"';
                $this->msgMessageTextJSArray .= ',"' . str_replace( $breaks, " ", nl2br( htmlspecialchars( $message['message'], ENT_QUOTES, 'UTF-8' ) ) ) . '"';
                $this->msgPublishedJSArray .= ',"' . ($message['published'] == '0' ? 'No' : 'Yes' ) . '"';
                $this->msgMessageIdsJSArray .= ',"' . base_convert( $message['id'], 10, 8 ) . '"';
                $this->msgCiphersJSArray .= ',"' . $message['cipher_id'] . '"';
                $this->msgDecryptedByJSArray .= ',"' . $this->message_model->countDecryptions( $message['id'] ) . '"';
                $this->msgKeyAByJSArray .= ',"' . $message['key_a'] . '"';
                $this->msgKeyBByJSArray .= ',"' . $message['key_b'] . '"';
                $this->msgCipherIdsJSArray .= ',"' . $message['id'] . '"';

                if( getUserId() ) {
                    $cracked = $this->message_model->isMessageCracked( getUserId(), $message['id'] ) ? 'true' : 'false';
                }
                else {
                    $cracked = $this->message_model->isAnonMessageCracked( session_id(), $message['id'] ) ? 'true' : 'false';
                }

                $this->msgCrackedJSArray .= ',' . $cracked;

                if ( getUserId() ) {
                    $this->msgCopied .= ',' . (!empty( $message['copied'] ) ? 'true' : 'false' );
                }
                else {
                    $this->msgCopied .= ',false';
                }
                $this->msgShowCiphersJSArray .= ',' . (!empty( $message['show_cipher'] ) && $message['show_cipher'] != 0 ? 'true' : 'false' );

                $this->msgCipherPointsJSArray .= ',' . $this->point_model->calculate_message_points( $message );
            }
        }


        $this->msgCipherTextJSArray .= ']';
        $this->msgThemesJSArray .= ']';
        $this->msgDifficultyJSArray .= ']';
        $this->msgMessageTextJSArray .= ']';
        $this->msgPublishedJSArray .= ']';
        $this->msgMessageIdsJSArray .= ']';
        $this->msgCiphersJSArray .= ']';
        $this->msgDecryptedByJSArray .= ']';
        $this->msgKeyAByJSArray .= ']';
        $this->msgKeyBByJSArray .= ']';
        $this->msgCipherIdsJSArray .= ']';

        $this->msgCrackedJSArray .= ']';
        $this->msgCopied .= ']';
        $this->msgShowCiphersJSArray .= ']';
        $this->msgCipherPointsJSArray .= ']';
    }

    public function displayMessages( $limitOffset = '0', $type = 'id', $dir = 'asc' )
    {
        $dir = !empty( $dir ) ? $dir : 'asc';

        $orders = $this->get_sort_order();

        $data['messages'] = $this->message_model->getMessagesPaginate( null, $orders, $limitOffset, false );

        $data['co'] = new Challenge_options( $this->db );

        return load_view( 'boards/messages', $data );
    }

    public function displayMessagesByUser( $userId )
    {
        $orders = $this->get_sort_order();
        $this->messages = $this->message_model->getMessagesByUser( $userId, $orders );
        $this->processMessages();
    }

    public function get_sort_order()
    {
        $orders = null;

        $dir = !empty( $_REQUEST['dir'] ) ? $_REQUEST['dir'] : 'asc';
        $type = !empty( $_REQUEST['type'] ) ? $_REQUEST['type'] : 'id';

        switch( $type ) {
            case "id":
                $field = 'id';
                break;
            case "theme":
                $field = 'theme_name';
                break;
            case "joke":
                $field = 'joke';
                break;
            case "message":
                $field = 'message';
                break;
            case "cipher":
                $field = 'cipher_name';
                break;
            case "user":
                $field = 'final_codename';
                break;
            case "decrypted":
                $field = "total_decrypted";
                break;
            case "date":
                $field = "created_on";
                break;
            case "difficulty":
                $field = 'difficulty_name';
                break;
            default:
                $field = 'id';
                break;
        }

        $orders[$field] = $dir;

        return $orders;
    }

}