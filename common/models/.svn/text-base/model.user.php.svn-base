<?php
/**
 * @property Group_model $group_model
 * @property Db $db
 */
class User_model
{

    function __construct($db)
    {
        $this->db = $db;

        $this->group_model = new Group_model($this->db);
    }

    public function save($data)
    {
        $field_values['username'] = $data['username'];
        $field_values['email'] = $data['email'];
        $field_values['age'] = $data['age'];
        $field_values['gender'] = isset($data['gender']['gender']) ? $data['gender']['gender'] : null;
        $field_values['codename'] = $data['codename'];
        $field_values['codename_counter'] = $data['codenameCounter'];

        if( empty( $data['codename'] ) ) {
            $codename = new Codenames( $this->db );
            $field_values['codename'] = $codename->getRandomCodename();
            $field_values['codename_counter'] = $codename->getNextCodenameNumber( $field_values['codename'] );
        }

        //$field_values['enabled'] = '1';
        $field_values['created_on'] = date("Y-m-d H:i:s");
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->insert('users', $field_values);

            $userId = $this->db->lastInsertId();

            $this->updatePassword($userId, $data['password']);

            return $userId;
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function saveNewsletter($userId)
    {
        $field_values['user_id'] = $userId;
        $field_values['created_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->insert('newsletter_optin', $field_values);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function authenticate($username, $password)
    {
        $sql = "SELECT id, username FROM users WHERE username = ? AND password = ?";

        $encryptedPassword = $this->encryptPassword($password, $username);

        try {
            $userData = $this->db->fetchRow($sql, array($username, $encryptedPassword));

            if (!empty($userData) && $userData['username'] == $username) {
                return $userData['id'];
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function usernameExist($username)
    {
        $sql = "SELECT username FROM users WHERE username = ?";
        try {
            $dbusername = $this->db->fetchOne($sql, $username);

            if ($dbusername == $username) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function emailExist($email)
    {
        $sql = "SELECT email FROM users WHERE email = ?";
        try {
            $dbemail = $this->db->fetchOne($sql, $email);

            if ($dbemail == $email) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function getUsername($userId)
    {

    }

    public function getUserDataByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = ?";

        try {
            return $this->db->fetchRow($sql, $email);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function getUser($userId)
    {
        $sql = "SELECT users.id AS user_id, 
            users.username,
            users.email,
            users.password,
            users.age,
            users.gender,
            users.codename,
            users.codename_counter,
            newsletter_optin.user_id AS subscribed,
            newsletter_optin.parent_email,
            encrypted_codenames.encrypted_codename,
            encrypted_codenames.cipher_id
            FROM users
            LEFT JOIN newsletter_optin ON newsletter_optin.user_id = users.id 
            LEFT JOIN encrypted_codenames ON encrypted_codenames.user_id = users.id
            WHERE users.id = ?";

        try {
            return $this->db->fetchRow($sql, $userId);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function getUsers($options = null, $order = null)
    {
        $select = $this->db->select();
        $select->from('users', array('users.id AS user_id',
            'users.username',
            'users.email',
            'users.password',
            'users.age',
            'users.gender',
            'users.codename',
            'users.codename_counter',
            'users.created_on'));
        $select->joinLeft('encrypted_codenames', 'encrypted_codenames.user_id = users.id', array('encrypted_codenames.encrypted_codename'));
        $select->joinLeft('newsletter_optin', 'newsletter_optin.user_id = users.id', array('newsletter_optin.confirmed'));

        if (!empty($options) && is_array($options)) {
            foreach ($options as $fieldName => $optionValue) {
                $modifier = substr($optionValue, 0, 2);
                $length = strlen($optionValue);

                switch ($modifier) {
                    case "!=":
                    case ">":
                    case "<":
                        $optionValue = trim(substr($optionValue, strlen($length), ($length - strlen($length))));
                        break;
                    default:
                        $modifier = ' = ';
                        break;
                }

                switch ($optionValue) {
                    case "IS NOT NULL":
                    case "IS NULL":
                        $select->where($fieldName . ' ' . $optionValue, null, false);
                        break;
                    default:
                        $select->where($fieldName . ' ' . $modifier . ' ?', $optionValue);
                        break;
                }
            }
        }

        if (!empty($order) && is_array($order)) {
            foreach ($order as $fieldName => $direction) {
                $select->order($fieldName . ' ' . $direction);
            }
        } else {
            $select->order('users.username ASC');
        }

        try {
            $stmt = $select->query();

            $results = $stmt->fetchAll();
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        return $results;
    }

    public function getOptin($userId)
    {
        $sql = 'SELECT * FROM newsletter_optin WHERE user_id = ?';

        try {
            return $this->db->fetchRow($sql, $userId);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updateUserName($userId, $username)
    {
        $field_values['username'] = $username;

        try {
            $this->db->update('users', $field_values, 'users.id= ' . $this->db->quote($userId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updatePassword($userId, $password)
    {
        $userData = $this->getUser($userId);

        $field_values['password'] = $this->encryptPassword($password, $userData['username']);

        try {
            $this->db->update('users', $field_values, 'users.id = ' . $this->db->quote($userId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updateUserSubscription($userId, $optin, $parentEmail)
    {
        $this->db->delete('newsletter_optin', 'user_id = ' . $this->db->quote($userId));

        if ($optin) {
            $this->subscribeUser($userId, $parentEmail);
        }
    }

    public function subscribeUser($userId, $parentEmail)
    {
        $subscriberData = $this->getSubscriberData($userId);

        $sql = "INSERT INTO newsletter_optin ( user_id, parent_email, created_on, updated_on ) VALUES ( ?, ?, ?, ? )
            ON DUPLICATE KEY UPDATE parent_email = values( parent_email ), updated_on=values(updated_on)";

        if (!empty($subscriberData['parent_email']) && $subscriberData['parent_email'] != $parentEmail) {
            $sql .= ", confirmed = '0'";
        }

        try {
            $this->db->query($sql, array($userId, $parentEmail, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function getSubscriberData($userId)
    {
        $sql = "SELECT * FROM newsletter_optin WHERE user_id = ?";

        try {
            return $this->db->fetchRow($sql, $userId);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function unsubscribeUser($userId)
    {
        try {
            $this->db->delete('newsletter_optin', 'user_id = ' . $this->db->quote($userId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updateCodename($userId, $codename)
    {
        $field_values['codename'] = $codename;

        try {
            $this->db->update('users', $field_values, 'users.id = ' . $this->db->quote($userId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function deleteEncryptedCodename($userId)
    {
        try {
            $this->db->delete('encrypted_codenames', 'user_id = ' . $this->db->quote($userId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function verifySubscription($userId)
    {
        $field_values['confirmed'] = '1';
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            return $this->db->update('newsletter_optin', $field_values, 'newsletter_optin.user_id = ' . $this->db->quote($userId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function encryptPassword($password = null, $username = null)
    {
        $password = base64_encode(rc4($username . '-' . $password));

        return $password;
    }

    public function decryptPassword($password)
    {
        $password = rc4(base64_decode($password));

        $password = end(explode('-', $password));

        return $password;
    }

    public function changeStatus($useId, $status)
    {
        $field_values['status'] = $status;
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        $sessionId = session_id();

        try {
            $this->db->update('login_log', $field_values, 'session_id = ' . $this->db->quote($sessionId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    // TODO: fix time function to log tim properly
    public function logTime($userId, $sessionId)
    {
        $sql = "UPDATE login_log 
                SET updated_on = NOW()
            WHERE user_id = ? && session_id = ? AND status = 'active'";

        try {
            $this->db->query($sql, array($userId, $sessionId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updateAttribute($fieldName, $value, $userId)
    {
        $field_values[$fieldName] = $value;

        try {
            $this->db->update('users', $field_values, 'id = ' . $this->db->quote($userId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function saveEncryptedCodename($userId, $encryptedCodename, $currentCipher)
    {
        $field_values['user_id'] = $userId;
        $field_values['encrypted_codename'] = $encryptedCodename;
        $field_values['cipher_id'] = $currentCipher;
        $field_values['created_on'] = date("Y-m-d H:i:s");
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->delete('encrypted_codenames', 'user_id = ' . $this->db->quote($userId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        if (strlen($encryptedCodename) > 0) {
            try {
                $this->db->insert('encrypted_codenames', $field_values);
            } catch (Exception $e) {
                errorCheck($e, __LINE__, __FILE__);
            }
        }
    }

    public function get_groups($userId)
    {
        $select = $this->db->select();
        $select->from('users_2_groups');
        $select->joinLeft('groups', 'groups.id = users_2_groups.group_id', 'groups.group_name');
        $select->where('users_2_groups.user_id = ?', $userId);
        try {
            $stmt = $select->query();

            $results = $stmt->fetchAll();

            return $results;
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function makeGroupAdmin($userId, $groupId)
    {
        $field_values[] = $userId;
        $field_values[] = $groupId;
        $field_values[] = date("Y-m-d H:i:s");
        $field_values[] = date("Y-m-d H:i:s");

        $sql = "INSERT IGNORE INTO group_admins (id, user_id, group_id, created_on, updated_on ) VALUES ( '',?) ON DUPLICATE KEY UPDATE updated_on = VALUES(updated_on)";
        $sql = $this->db->quoteInto($sql, $field_values);

        try {
            $this->db->query($sql, $field_values);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function removeGroupAdmin($userId, $groupId)
    {
        try {
            $this->db->delete('group_admins', 'user_id = ' . $this->db->quote($userId) . ' AND group_id = ' . $this->db->quote($groupId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updateCodenameCounter($userId, $number)
    {
        $field_values['codename_counter'] = $number;

        try {
            $this->db->update('users', $field_values, 'id = ' . $this->db->quote($userId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function get_user_sessions($userId)
    {
        $sql = "SELECT created_on FROM login_log WHERE user_id = ? ORDER BY created_on DESC";

        try {
            return $this->db->fetchAll($sql, $userId);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }
    
    // @TODO should these be in message models?
    public function getAnonDecryptions( $sessionId )
    {
        $sql = "SELECT * FROM decryptions_anon_messages WHERE session_id = ?";
        
        try {
            return $this->db->fetchAll( $sql, $sessionId );
        }
        catch( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    public function getAnonJokeDecryptions($sessionId) {
        $sql = "SELECT * FROM decryptions_anon_joke_messages WHERE session_id = ?";
        
        try {
            return $this->db->fetchAll( $sql, $sessionId );
        }
        catch( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }
}