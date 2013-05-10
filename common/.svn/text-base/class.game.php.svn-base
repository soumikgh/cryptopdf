<?php
/**
 * @property Cipher_model $cipher_model
 * @property Game_model $game_model
 */
class Game
{

    public $gameId;
    public $userAction;
    public $messageId;
    public $cipher;

    /**
     *
     * @param type $db
     * @param int $userId
     * @param string $gameId
     * @param string $userAction
     * @param string $messageId
     * @param string $cipher
     * @throws Exception
     */
    function __construct($db, $userId, $gameId, $userAction = null, $messageId = null, $cipher = null, $rawData = null)
    {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            throw new Exception('invalid db');
        }

        $this->cipher_model = new Cipher_model($this->db);
        $this->ciphers = $this->cipher_model->get_ciphers(false);

        $this->game_model = new Game_model($this->db);

        if (!empty($userId)) {
            $this->userId = $userId;
        }

        if (!empty($gameId)) {
            $this->gameId = $gameId;
        }

        if (!empty($userAction)) {
            $this->userAction = $userAction;
        }

        if (!empty($messageId)) {
            $eMessageId = explode('_', $messageId);
            $this->messageId = end($eMessageId);
        }

        if (!empty($cipher)) {
            $this->cipher = $cipher;
            $this->cipherId = $this->translateCipherToId($cipher);
        }

        if (!empty($rawData)) {
            $this->rawData = $rawData;
        }


    }

    function saveAction()
    {
        $this->game_model->save_game_action($this->userId, $this->gameId, $this->userAction, $this->messageId, $this->cipherId, $this->rawData);
    }

    function saveGameData($data)
    {
        $data['user_id'] = getUserId();
        $data['raw_data'] = serialize($data);
        $data['game_id'] = $data['gameID'];


        // removes any google analytics variavles, like __umz
        foreach( $data as $key => $value ) {
            switch( $key ) {
                case "game_id":
                case "user_id":
                case "raw_data":
                    break;
                default:
                    unset( $data[$key] );
                    break;
            }
        }

        $this->game_model->save_game_data($data);
    }

    function loadGameData()
    {
        $data = $this->game_model->load_game($this->userId, $this->gameId);

        $data['vars'] = unserialize( $data['0']['raw_data'] );

        if (!empty($data) && count($data) > 0) {
            $flashVars = load_view('games/load', $data );
        } else {
            $flashVars = '';
        }

        return $flashVars;
    }

    function translateCipherToId($cipherName)
    {
        $found = false;
        foreach ($this->ciphers as $cipher) {
            if ($cipherName == strtolower($cipher['cipher_name'])) {
                return $cipher['id'];
            }
        }

        if (!$found) {
            mail(ADMIN_EMAIL, 'unknown cipher name found in: ' . __CLASS__, $cipherName . PHP_EOL . print_r($_SERVER, true));
        }
    }

}