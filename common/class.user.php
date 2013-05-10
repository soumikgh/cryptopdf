<?php

/**
 * @property User_model $user_model
 * @property Group_model $group_model
 * @property Game_model $game_model
 * @property Message_model $message_model
 * @property Jokemessage_model $jokemessage_model
 * @property Tool_model $tool_model 
 */
class User {

    /**
     *
     * @var int
     */
    public $userId;

    /**
     *  
     * @var string 
     */
    public $username;
    public $email;
    public $age;
    public $gender;
    public $codename;
    public $encryptedCodename;
    public $subscribed;
    public $parentEmail;
    public $encryptedText;
    public $encrypted;
    public $currentCipher;
    public $codenameCounter;
    private $password;

    const VERIFICATION_SALT = 'vigenere';

    function __construct($db, $userId = null) {
        $this->db = $db;
        $this->user_model = new User_model($this->db);
        $this->group_model = new Group_model($this->db);
        $this->game_model = new Game_model($this->db);
        $this->message_model = new Message_model($this->db);
        $this->jokemessage_model = new Jokemessage_model($this->db);
        $this->tools_model = new Tool_model($this->db);
        $this->cipher_model = new Cipher_model($this->db);
        $this->difficulty_model = new Difficulty_model($this->db);

        if (!empty($userId) && is_numeric($userId)) {
            $userData = $this->user_model->getUser($userId);

            $this->userId = $userId;
            $this->username = $userData['username'];
            $this->email = $userData['email'];
            $this->age = $userData['age'];
            $this->gender = $userData['gender'];
            $this->codename = $userData['codename'];
            $this->encryptedCodename = $userData['encrypted_codename'];
            $this->subscribed = $this->setSubscribed($userData['subscribed']);
            $this->parentEmail = $userData['parent_email'];
            $this->password = $userData['password'];
            $this->encryptedText = $userData['encrypted_codename'];
            $this->currentCipher = $userData['cipher_id'];
            $this->codenameCounter = $userData['codename_counter'];

            $this->encrypted = strlen($userData['encrypted_codename']) > 0 ? true : false;
        }
    }

    public function getPassword() {
        /*
         * if( getUserId() == $this->userId )

          {
          $password = rc4( base64_decode( $this->password ) );

          return end( explode('-', $password ) );
          }
          else {
          throw new Exception('Access denied to password');
          }

         */
        $password = rc4(base64_decode($this->password));

        return end(explode('-', $password));
    }

    public function getEncrypted() {
        if ($this->encrypted) {
            return 'true';
        } else {
            return 'false';
        }
    }

    private function setSubscribed($subscribed) {
        if (is_numeric($subscribed)) {
            return $subscribed == 1 ? true : false;
        } else {
            return false;
        }
    }

    public function setUsername($username) {
        if ($this->username != $username && strlen($username) > 0) {
            if (!$this->user_model->usernameExist($username)) {
                $this->user_model->updateAttribute('username', $username, $this->userId);
                $this->username = $username;

                // update password
                $password = $this->getPassword();
                $this->setPassword($password, $password, true);
            } else {
                return new Error($this->db, 'Username exists', false, __FILE__, __LINE__);
            }
        } else {
            return new Error($this->db, '', true);
        }
    }

    public function setPassword($password, $confirmPassword, $allowOverride = false) {
        if ($this->password != $password || $allowOverride) {
            if ($password == $confirmPassword) {
                $this->user_model->updatePassword($this->userId, $password);
                $this->password = $this->user_model->encryptPassword($password, $this->username);
            } else {
                return new Error($this->db, 'Passwords don\'t match', false, __FILE__, __LINE__);
            }
        } else {
            return new Error($this->db, '', true);
            ;
        }
    }

    public function setGender($gender) {
        $gender = strtolower($gender);
        if ($this->gender != $gender) {
            switch ($gender) {
                case "male":
                case "female":
                    $this->user_model->updateAttribute('gender', $gender, $this->userId);
                    $this->gender = $gender;
                    break;
                default:
                    return new Error($this->db, 'Invalid gender', false, __FILE__, __LINE__);
            }
        } else {
            return new Error($this->db, '', true);
            ;
        }
    }

    public function setOptin($optin, $parentEmail) {
        $optin = $optin == 1 ? true : false;
        if ($optin !== $this->subscribed || $parentEmail != $this->parentEmail) {
            $this->user_model->updateUserSubscription($this->userId, $optin, $parentEmail);
            if ($optin) {
                $this->sendNewsletterVerification($this->userId, $parentEmail);
            }
            $this->subscribed = $optin;
            $this->parentEmail = $parentEmail;
        } else {
            return new Error($this->db, '', true, __FILE__, __LINE__);
        }
    }

    public function sendNewsletterVerification($userId, $parentEmail) {
        $subscriberData = $this->user_model->getSubscriberData($userId);

        if ($subscriberData['parent_email'] != $parentEmail || $subscriberData['confirmed'] == '0') {
            $subject = 'Newsletter Subscription Confirmation';
            $body = 'Click the link below to confirm the newsletter subscription' . PHP_EOL;

            $body .= 'http://' . $_SERVER['HTTP_HOST'] . '/verify.php?d=' . base64_encode(rc4(self::VERIFICATION_SALT . '-' . $userId));

            mail($parentEmail, $subject, $body);
        }
    }

    public function setCodename($codename) {
        if ($codename != $this->codename) {
            $this->user_model->updateCodename($this->userId, $codename);
            $this->user_model->deleteEncryptedCodename($this->userId);
            $this->codename = $codename;
            $this->encryptedText = '';
            $this->encrypted = false;
        } else {
            return new Error($this->db, '', true);
            ;
        }
    }

    public function setCodenameCounter($number) {
        $this->user_model->updateCodenameCounter($this->userId, $number);
        $this->codenameCounter = $number;
    }

    public function setEncryptedCodename($encryptedText, $currentCipher) {
        if ($this->encryptedText != $encryptedText) {
            $this->user_model->saveEncryptedCodename($this->userId, $encryptedText, $currentCipher);
            $this->encryptedText = $encryptedText;
            $this->encrypted = true;
            $this->currentCipher = $currentCipher;
        } else {
            return new Error($this->db, '', true);
            ;
        }
    }

    public function setUserEmail($email) {
        if ($this->email != $email) {
            $updateUserEmail = $this->user_model->updateAttribute('email', $email, $this->userId);
            $this->email = $email;
        }
    }

    public function getRawPassword() {
        $password = rc4(base64_decode($this->password));

        return $password;
    }

    public function displayGroups($userId) {
        $data['groups'] = array();
        $data['groups'] = $this->group_model->get_groups_by_user_id($userId);
        $ownerGroups = $this->group_model->get_groups_by_owner_id($userId);
        $data['groups'] = array_merge($data['groups'], $ownerGroups);

        if (!empty($data['groups']) && count($data['groups']) > 0) {
            foreach ($data['groups'] as $key => $group) {
                if ($this->group_model->is_group_admin($userId, $group['id']) || $userId == $group['user_id']) {
                    $data['groups'][$key]['isAdmin'] = true;
                } else {
                    $data['groups'][$key]['isAdmin'] = false;
                }
            }
        }

        return load_view('groups/profile_groups', $data);
    }

    public function hasGroups($userId) {
        $data['groups'] = $this->group_model->get_groups_by_user_id($userId);
        $ownerGroups = $this->group_model->get_groups_by_owner_id($userId);
        $data['groups'] = array_merge($data['groups'], $ownerGroups);

        if (count($data['groups']) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function displayStats($userId = null) {
        if (empty($userId)) {
            $userId = $this->userId;
        }

        $data = array();
        $data['games'] = $this->game_model->get_all_user_game_data($userId);
        $data['messages'] = $this->message_model->get_all_user_message_data($userId);
        $data['jokes'] = $this->jokemessage_model->get_all_user_message_data($userId);
        $data['tools'] = $this->tools_model->get_user_completed($userId);

//        $this->totalPoints = $data['games']['totalPoints'] + $data['messages']['totalPoints'] + $data['jokes']['totalPoints'] + $data['tools']['totalPoints'];

        $data['totalPoints'] = $this->displayTotalPoints();

        return load_view('profile/stats', $data);
    }

    public function displayTotalPoints($userId = null) {
        if (empty($userId)) {
            $userId = $this->userId;
        }
        $totalPoints = 0;
        $totalPoints += $this->game_model->get_user_points($userId);
        $totalPoints += $this->message_model->get_user_points($userId);
        $totalPoints += $this->jokemessage_model->get_user_points($userId);
        $totalPoints += $this->tools_model->get_user_points(null, $userId);

        return $totalPoints;
    }
    
    public function convertAnonDecryptions( $sessionId )
    {
        $decryptions = $this->user_model->getAnonDecryptions( $sessionId );
        $jokeDecryptions = $this->user_model->getAnonJokeDecryptions( $sessionId );
        
        foreach( $decryptions as $decryption ) {
            $this->message_model->saveDecryption(getUserId(), $decryption['message_id'], $decryption['raw_data'] );
            $this->message_model->deleteAnonDecryption($decryption['id'] );
        }
        
        foreach( $jokeDecryptions as $decryption ) {
            $this->jokemessage_model->saveDecryption(getUserId(), $decryption['message_id'], $decryption['raw_data'] );
            $this->jokemessage_model->deleteAnonDecryption($decryption['id'] );
        }
    }

}