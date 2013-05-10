<?php

class Jokemessage_model extends Message_model
{

    public $table;
    public $decryptionTable;
    public $copiedCiphersTable;

    function __construct($db)
    {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            throw new Exception('Invalid db object');
        }

        $this->table = 'joke_messages';
        $this->decryptionTable = 'decryptions_jokes';
        $this->anonDecryptionTable = 'decryptions_anon_joke_messages';
        $this->copiedCiphersTable = 'copied_joke_ciphers';

        $this->point_model = new Point_model($this->db);
    }

    public function getMessages($options = null, $orders = null, $limitOffset = null, $count = false)
    {
        $select = $this->db->select();

        if (!$count) {
            // added COALESCE so that we can sort by multiple columns even if they are null, CONCAT combines the codename and counter togeher
            $select->from(array($this->table), array('*', 'COALESCE( encrypted_codename, CONCAT_WS( \'-\', codename, codename_counter ) ) AS final_codename','(SELECT count( message_id ) FROM ' . $this->decryptionTable . ' WHERE message_id = ' . $this->table . '.id) AS decrypted', '(SELECT count( message_id ) FROM ' . $this->anonDecryptionTable . ' WHERE message_id = ' . $this->table . '.id) AS anon_decrypted'));

            if (getUserId()) {
                $select->joinLeft($this->copiedCiphersTable, $this->copiedCiphersTable . '.message_id = ' . $this->table . '.id AND ' . $this->copiedCiphersTable . '.user_id = ' . $this->db->quote(getUserId()), $this->copiedCiphersTable . '.message_id AS copied');
            }
            $select->joinLeft('ciphers', 'ciphers.id = ' . $this->table . '.cipher_id', 'ciphers.cipher_name');
            $select->joinLeft('users', 'users.id = ' . $this->table . '.user_id', array('users.username', 'users.codename', 'users.codename_counter'));
            $select->joinLeft('encrypted_codenames', 'encrypted_codenames.user_id = ' . $this->table . '.user_id', 'encrypted_codenames.encrypted_codename');
            $select->joinLeft('points_ciphers', 'points_ciphers.cipher_id = ' . $this->table . '.cipher_id', array('points_ciphers.points AS cipher_points', 'revealed_points', 'unrevealed_points'));
        } else {

            $select->from(array($this->table), array('count(' . $this->table . '.id) AS total'));
        }

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
                        $modifier = '=';
                        break;
                }

                switch ($optionValue) {
                    case "IS NOT NULL":
                    case "IS NULL":
                        $select->where($fieldName . ' ' . $optionValue, null, false);
                        break;
                    default:
                        $select->where($fieldName . ' ' . $modifier . $this->db->quote($optionValue));
                        break;
                }
            }
        }

        // in order to be able to sort by the total decrypted columns I had to wrap everything in one more query
        $sub_query = $select->__tostring();
        $sql = "SELECT *, decrypted+anon_decrypted AS total_decrypted FROM ( " . $sub_query . " ) t ";

        $i = 0;

        if (!empty($orders) && is_array($orders) && count( $orders ) > 0 ) {

            $sql .= 'ORDER BY ';

            foreach ($orders as $fieldName => $direction) {
                if ($i > 0) {
                    $sql .= ',';
                }
                $sql .= $fieldName . ' ' . $direction;
            }
        }

        if( isset( $limitOffset ) ) {
            $limitSql = ' LIMIT ' . MSG_PER_BOARD;

            if( $limitOffset > 0 )
                $limitSql .= ' OFFSET ' . $limitOffset;

            $sql .= $limitSql;
        }

        return $this->db->fetchAll($sql);
    }

    function save($userId, $joke, $punchline, $encryptedPunchline, $cipherId, $keya, $keyb, $published = '0')
    {
        $field_values['user_id'] = $userId;
        $field_values['joke'] = $joke;
        $field_values['punchline'] = $punchline;
        $field_values['encrypted_punchline'] = $encryptedPunchline;
        $field_values['cipher_id'] = $cipherId;
        $field_values['key_a'] = $keya;
        $field_values['key_b'] = $keyb;
        $field_values['published'] = $published;
        $field_values['created_on'] = date("Y-m-d H:i:s");
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->insert($this->table, $field_values);

            return $this->db->lastInsertId();
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    function update($joke, $punchline, $encryptedPunchline, $cipherId, $keya, $keyb, $messageId)
    {
        $field_values['joke'] = $joke;
        $field_values['punchline'] = $punchline;
        $field_values['encrypted_punchline'] = $encryptedPunchline;
        $field_values['cipher_id'] = $cipherId;
        $field_values['key_a'] = $keya;
        $field_values['key_b'] = $keyb;
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->update($this->table, $field_values, $this->table . '.id=' . $this->db->quote($messageId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updateJoke($messageId, $joke)
    {
        $field_values['joke'] = $joke;
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->update($this->table, $field_values, $this->table . '.id =' . $this->db->quote($messageId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updatePunchline($messageId, $punchline, $encryptedPunchline)
    {
        $field_values['encrypted_punchline'] = $encryptedPunchline;
        $field_values['punchline'] = $punchline;
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->update($this->table, $field_values, $this->table . '.id =' . $this->db->quote($messageId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function get_all_user_message_data($userId )
    {
        $cipherModel = new Cipher_model($this->db);
        $ciphers = $cipherModel->get_ciphers();

        $sql = "Select " . $this->table . ".id AS message_id, cipher_name
                FROM " . $this->decryptionTable . "
                LEFT JOIN " . $this->table . " ON " . $this->table . ".id = " . $this->decryptionTable . ".message_id
                LEFT JOIN ciphers ON ciphers.id = " . $this->table . ".cipher_id
                WHERE " . $this->decryptionTable . ".user_id = ?";

        if (!empty($messageId)) {
            $sql .= " AND message_id = " . $this->db->quote($messageId);
        }

        $sql .= " ORDER BY cipher_name";

        try {
            $rawMessages = $this->db->fetchAll($sql, $userId);

            $messages = array();
            $diffArray = array();
            $totalCompleted = 0;
            $totalPoints = 0;

            foreach ($rawMessages as $message) {
                if (!empty($message['cipher_name'])) {
                    if( empty( $messages[$message['cipher_name']]['total'] ) ) {
                        $messages[$message['cipher_name']]['total'] = 0;
                    }
                    $messages[$message['cipher_name']]['total']++;
                    $messages[$message['cipher_name']]['points'] = $this->get_user_points($userId, $message['message_id']);

                    //$totalPoints += $messages[$message['cipher_name']]['points'];
                    $totalCompleted++;
                }
            }

            foreach ($ciphers as $cipher) {
                if (empty($messages[$cipher['cipher_name']])) {
                    $messages[$cipher['cipher_name']] = array('total' => 0, 'points' => 0);
                }
                else {
                    $totalPoints += $messages[$cipher['cipher_name']]['points'];
                }
            }

            $messages['totalPoints'] = $totalPoints;
            $messages['totalCompleted'] = $totalCompleted;

            return $messages;
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function get_user_decryptions($userId, $messageId = null )
    {
        $sql = "SELECT  points_ciphers.revealed_points, points_ciphers.unrevealed_points, points_ciphers.points AS cipher_points FROM " . $this->decryptionTable . "
            LEFT JOIN " . $this->table . " ON " . $this->table . ".id = " . $this->decryptionTable . ".message_id 
           LEFT JOIN points_ciphers ON points_ciphers.cipher_id = " . $this->table . ".cipher_id
               WHERE " . $this->decryptionTable . ".user_id = ?";

        if (!empty($messageId)) {
            $sql .= " AND message_id = " . $this->db->quote($messageId);
        }

        try {
            $decryptions = $this->db->fetchAll($sql, $userId);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        return is_array($decryptions) ? $decryptions : array();
    }
}