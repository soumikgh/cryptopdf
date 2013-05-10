<?php

/**
 * @property Message_model $message_model
 * @property Jokemessage_model $jokemessage_model
 */
class Message
{

    public $id;
    public $message;
    public $cipher;
    public $cipherName;
    public $cipherText;
    public $keyA;
    public $keyB;
    public $difficulty;
    public $difficultyName;
    public $theme;
    public $themeName;

    function __construct($db, $boardId = '0')
    {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            throw new Exception('Invalid db object');
        }

        $this->message_model = new Message_model($this->db, $boardId);
        $this->jokemessage_model = new Jokemessage_model($this->db, $boardId);
        $this->groupmessage_model = new Groupmessage_model($this->db, $boardId);
        $this->group_model = new Group_model($this->db);
        if (!empty($id)) {
            $this->setProperties($this->message_model->getMessage($id));
        }
    }

    /**
     * If message id is passed in it must be converted from base 8 to base 10
     * @param type $message
     * @param type $cipher
     * @param type $cipherText
     * @param type $keyA
     * @param type $keyB
     * @param type $difficulty
     * @param type $theme
     * @param type $messageId
     * @return type
     */
    function save($type = 'message', $message, $cipher, $cipherText, $keyA, $keyB, $difficulty, $theme, $showCipher, $messageId = null)
    {
        switch ($type) {
            case "message":
            case "group":

//                $message = filter_var( $message, FILTER_SANITIZE_STRING );
                $message = trim($message);

//                $cipherText = filter_var( $cipherText, FILTER_SANITIZE_STRING );
                $cipherText = trim($cipherText);

//                $keyA = filter_var( $keyA, FILTER_SANITIZE_STRING );
                $keyA = trim($keyA);

//                $keyB = filter_var( $keyB, FILTER_SANITIZE_STRING );
                $keyB = trim($keyB);

                // update record
                if (!empty($messageId) && getUserId()) {
                    // convert message
                    $messageId = $this->message_model->update(getUserId(), $message, $cipher, $cipherText, $keyA, $keyB, $difficulty, $theme, $showCipher, $messageId);
                } // insert new record
                else if (getUserId()) {
                    $messageId = $this->message_model->save(getUserId(), $message, $cipher, $cipherText, $keyA, $keyB, $difficulty, $theme, $showCipher, $messageId);
                } else {
                    $messageId = $this->message_model->saveAnon(session_id(), $messageId, getIP(), $_REQUEST);
                }
                break;
            case "joke":
                mail('msteudel@gmail.com', 'Should not be here', __FILE__ . PHP_EOL . __LINE__ . PHP_EOL . 'joke should not be saving here');
//                if ( !empty( $userId ) && is_numeric( $userId ) ) {
//                    $this->jokemessage_model->save( $userId, $joke, $punchline, $encryptedPunchline, $cipherId, $keya, $keyb );
//                }
                break;
        }


        return json_encode(array('b8messageId' => base_convert($messageId, 10, 8), 'messageId' => $messageId));
    }

    public function delete($type, $messageId)
    {
        // TODO: if they want user permissions uncomment otherwise we'll just htaccess this admin file
        // if ( $this->message_model->can_edit( getUserId(), $messageId ) && !empty( $messageId ) && is_numeric( $messageId ) ) {
        if (!empty($messageId) && is_numeric($messageId)) {
            switch ($type) {
                case "message":
                case "group":
                    $this->message_model->delete($messageId);
                    break;
                case "joke":
                    $this->jokemessage_model->delete($messageId);
                    break;
            }
        } else if (!$this->message_model->can_edit(getUserId(), $messageId)) {
            return json_encode(array('error' => 'You do no have permissions to publish'));
        } else {
            return json_encode(array('error' => 'invalid message id'));
        }
    }

    public function setProperties($message)
    {
        $this->id = $message['id'];
    }

    public function publish($type, $messageId, $groupId = null)
    {
        // TODO: if they want user permi9ssinos uncomment or htaccess file
//        if ( $this->message_model->can_edit( getUserId(), $messageId, $groupId ) && !empty( $messageId ) && is_numeric( $messageId ) ) {
        if (!empty($messageId) && is_numeric($messageId)) {
            switch ($type) {
                case "message":
                case "group":
                    $this->message_model->publish($messageId);
                    break;
                case "joke":
                    $this->jokemessage_model->publish($messageId);
                    break;
            }

            return json_encode(array());
        } else if (!$this->message_model->can_edit(getUserId(), $messageId)) {
            return json_encode(array('error' => 'You do no have permissions to publish'));
        } else {
            return json_encode(array('error' => 'invalid message id'));
        }
    }

    public function unpublish($type, $messageId)
    {
        // TODO: if they want user permissions unccomment or htaccess file
//        if ( $this->message_model->can_edit( getUserId(), $messageId ) && !empty( $messageId ) && is_numeric( $messageId ) ) {
        if (!empty($messageId) && is_numeric($messageId)) {
            switch ($type) {
                case "message":
                case "group":
                    $this->message_model->unpublish($messageId);
                    break;
                case "joke":
                    $this->jokemessage_model->unpublish($messageId);
                    break;
            }
            return json_encode(array());
        } else if (!$this->message_model->can_edit(getUserId(), $messageId)) {
            return json_encode(array('error' => 'You do no have permissions to publish'));
        } else {
            return json_encode(array('error' => 'invalid message id'));
        }
    }

    /**
     *
     * @param type $type
     * @param type $userId
     * @param type $messageId
     * @param str $rawData the REQUEST variable serialized and base64_encoded
     * @return str $json
     */
    public function saveDecryption($type, $userId, $messageId, $rawData)
    {
        $json = array('success' => false);
        if (!empty($userId) && !empty($messageId)) {
            switch ($type) {
                case "message":
                case "group":
                    if ($this->message_model->has_decrypted($userId, $messageId)) {
                        $json = array('success' => false, 'msg' => 'You\'ve already decrytped this message, try another.');
                    } else {
                        $this->message_model->saveDecryption($userId, $messageId, $rawData);
                        $json = array('success' => true, 'msg' => '');
                    }
                    break;
                case "joke":
                    if ($this->jokemessage_model->has_decrypted($userId, $messageId)) {
                        $json = array('success' => false, 'msg' => 'You\'ve already decrytped this message, try another.');
                    } else {
                        $this->jokemessage_model->saveDecryption($userId, $messageId, $rawData);
                        $json = array('success' => true, 'msg' => '');
                    }
                    break;
            }
        } else {
            $sessionId = session_id();
            switch ($type) {
                case "message":
                case "group":
                    if ($this->message_model->has_anon_decrypted($sessionId, $messageId)) {
                        // return error
                        $json = array('success' => false, 'msg' => 'You\'ve already decrytped this message, try another.');
                    } else {
                        $this->message_model->saveAnon($sessionId, $messageId, getIP(), $rawData);
                        $json = array('success' => true, 'msg' => '');
                    }
                    break;
                case "joke":
                    if( $this->jokemessage_model->has_anon_decrypted( $sessionId, $messageId ) ) {
                        $json = array('success' => false, 'msg' => 'You\'ve already decrytped this message, try another.');
                    }
                    else {
                        $this->jokemessage_model->saveAnon($sessionId, $messageId, getIP(), $rawData);
                        $json = array('success' => true, 'msg' => '');
                    }

                    break;
            }
        }

        return json_encode($json);
    }

    /**
     *
     * @param type $type
     * @param type $userId
     * @param type $messageId Need to convert to base8
     * @throws InvalidArgumentException
     */
    public function saveCopied($type, $userId, $messageId)
    {
        if (!empty($userId) && !empty($messageId)) {
            switch ($type) {
                case "message":
                case "group":
                    $messageId = base_convert($messageId, 8, 10);
                    $this->message_model->saveCopied($userId, $messageId);
                    break;
                case "joke":
                    $this->jokemessage_model->saveCopied($userId, $messageId);
                    break;
            }
        } else {
            throw new InvalidArgumentException('invalud user id or message id');
        }
    }

    public function saveJokeMessage($userId, $joke, $punchline, $encryptedPunchline, $cipherId, $keya, $keyb, $messageId = null)
    {
//        $joke = filter_var($joke, FILTER_SANITIZE_STRING);
        $joke = trim($joke);

//        $punchline = filter_var( $punchline, FILTER_SANITIZE_STRING );
        $punchline = trim($punchline);

//        $encryptedPunchline = filter_var( $encryptedPunchline, FILTER_SANITIZE_STRING );
        $encryptedPunchline = trim($encryptedPunchline);

        if (!empty($userId) && is_numeric($userId)) {
            if (empty($messageId)) {
                $this->jokemessage_model->save($userId, $joke, $punchline, $encryptedPunchline, $cipherId, $keya, $keyb);
            } else {

                $this->jokemessage_model->update($joke, $punchline, $encryptedPunchline, $cipherId, $keya, $keyb, $messageId);
            }
        }
    }

    /**
     * Updates just the joke
     * @param $messageId
     * @param $joke
     */
    public function updateJoke($messageId, $joke)
    {
        if (is_numeric($messageId) && is_numeric(getUserId())) {
            $this->jokemessage_model->updateJoke($messageId, $joke);
        }
    }

    /**
     * Updates the punchline
     * @param $messageId
     * @param $punchline
     * @param $cipherText
     */
    public function updateJokePunchline($messageId, $punchline, $cipherText)
    {
        if (is_numeric($messageId) && is_numeric(getUserId())) {
            $this->jokemessage_model->updatePunchline($messageId, $punchline, $cipherText);
        }
    }


}