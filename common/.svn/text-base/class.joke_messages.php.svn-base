<?php
/**
 * @property Jokemessage_model $jokemessage_model
 * @property Point_model $point_model 
 */
class Joke_messages
{

    public $msgJokeJSArray;
    public $msgPunchlineJSArray;
    public $msgPunchlineEncryptionJSArray;
    public $msgCipherIdsJSArray;
    public $msgKeyAJSArray;
    public $msgKeyBJSArray;
    public $msgCreatedOn;
    public $paginationHtml;

    function __construct( $db, $type = null, $limitOffset = null, $showAll = false )
    {
        if ( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception( 'invalid db object' );
        }

        $this->point_model = new Point_model($this->db );
        $this->jokemessage_model = new Jokemessage_model( $this->db );

        $orders = $this->get_sort_order();
        $this->messages = $this->jokemessage_model->getMessagesPaginate( null, $orders, $limitOffset, $showAll  );

        $this->processMessages();

        $config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

        // do count
        // $total = $this->message_model->getMessages( null, null, null, true );
        $total = $this->jokemessage_model->countMessages( $showAll );
        
        $config['total_rows'] = $total;
        $config['per_page'] = MSG_PER_BOARD;
        $config['type'] = isset( $_GET['type'] ) ? $_GET['type'] : NULL;
        $config['dir'] = isset( $_GET['dir'] ) ? $_GET['dir'] : NULL;

        if ( !empty( $page ) ) {
            $config['cur_page'] = $page;
        }
        
        $this->pagination = new Pagination();
        $this->pagination->initialize( $config );
        $this->paginationHtml = $this->pagination->createLinks();
        
    }

    function processMessages( $limitOffset = null )
    {

        $this->msgJokeJSArray = '[""';
        $this->msgPunchlineJSArray = '[""';
        $this->msgPunchlineEncryptionJSArray = '[""';
        $this->msgCipherIdsJSArray = '[""';
        $this->msgKeyAJSArray = '[""';
        $this->msgKeyBJSArray = '[""';
        $this->msgCreatedOnJSArray = '[""';
        $this->msgUsersJSArray = '[""';
        $this->msgCopiedJSArray = '[""';
        $this->msgDecryptedByJSArray = '[""';
        $this->msgCrackedJSArray = '[""';
        // unconverted message id
        $this->msgMessageIdsJSArray = '[""';
        $this->msgPublishedJSArray = '[""';
        $this->msgCodenamesJSArray = '[""';
        $this->msgCipherPointsJSArray = '[""';

        $breaks = array( "\r\n", "\n", "\r" );
        foreach ( $this->messages as $message ) {

            $this->msgJokeJSArray .= ',"' . $message['joke'] . '"';
            $this->msgPunchlineJSArray .= ',"' . str_replace( $breaks, "", nl2br( htmlspecialchars( $message['punchline'], ENT_QUOTES, 'UTF-8') ) ) . '"';
            $this->msgPunchlineEncryptionJSArray .= ',"' . str_replace( $breaks, "", nl2br( htmlspecialchars( $message['encrypted_punchline'], ENT_QUOTES, 'UTF-8') ) ). '"';

            $this->msgCipherIdsJSArray .= ',"' . $message['cipher_id'] . '"';
            $this->msgKeyAJSArray .= ',"' . $message['key_a'] . '"';
            $this->msgKeyBJSArray .= ',"' . $message['key_b'] . '"';
            $this->msgCreatedOnJSArray .= ',"' . date( "m-d-Y", strtotime( $message['created_on'] ) ) . '"';
            $this->msgUsersJSArray .= ',"' . htmlspecialchars( $message['username'], ENT_QUOTES, 'UTF-8') . '"';
            $this->msgCopiedJSArray .= ',' . ( !empty( $message['copied'] ) ? 'true' : 'false' );
            $this->msgDecryptedByJSArray .= ',"' . $this->jokemessage_model->countDecryptions( $message['id'] ) . '"';
            
            $cracked = $this->jokemessage_model->isMessageCracked( getUserId(), $message['id'] ) ? 'true' : 'false';
            $this->msgCrackedJSArray .= ',' . $cracked;
            $this->msgMessageIdsJSArray .= ',' . $message['id'];
            $this->msgPublishedJSArray .= ',' . ( $message['published'] == 1 ? '"Yes"' : '"No"' );
            
            $codename = ( strlen( $message['encrypted_codename'] ) > 0 ? $message['encrypted_codename'] .'-'.$message['codename_counter'] : $message['codename'] . '-' . $message['codename_counter'] );
            $codename = strlen( $codename ) > 0 ? $codename : 'Anonymous';
            
            $this->msgCodenamesJSArray .= ',"' . htmlspecialchars( $codename, ENT_QUOTES, 'UTF-8') . '"';
            $this->msgCipherPointsJSArray .= ',"' . $this->point_model->calculate_message_points( $message ) . '"';
        }

        $this->msgJokeJSArray .= ']';
        $this->msgPunchlineJSArray .= ']';
        $this->msgPunchlineEncryptionJSArray .= ']';
        $this->msgCipherIdsJSArray .= ']';
        $this->msgKeyAJSArray .= ']';
        $this->msgKeyBJSArray .= ']';
        $this->msgCreatedOnJSArray .= ']';
        $this->msgUsersJSArray .= ']';
        $this->msgCopiedJSArray .= ']';
        $this->msgDecryptedByJSArray .= ']';
        $this->msgCrackedJSArray .= ']';
        $this->msgMessageIdsJSArray .= ']';
        $this->msgPublishedJSArray .= ']';
        $this->msgCodenamesJSArray .= ']';
        $this->msgCipherPointsJSArray .= ']';
    }

    public function displayMessages( $limitOffset = '0' )
    {
        $data['messages'] = $this->message_model->getMessagesPaginate( null, null, $limitOffset );
        $data['co'] = new Challenge_options( $this->db );

        return load_view( 'boards/messages', $data );
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
            case "message":
                $field = 'message';
                break;
            default:
                $field = 'id';
                break;
        }

        $orders[$field] = $dir;

        return $orders;
    }
}