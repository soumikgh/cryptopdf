<?php

/**
 * @property Point_model $point_model
 * @property Group_model $group_model
 */
class Message_model
{

    public $table;
    public $decryptionTable;
    public $anonDecryptionTable;
    public $copiedCiphersTable;

    function __construct($db, $boardId = '0', $userId = null)
    {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            throw new Exception('Invalid db object');
        }

        if (is_numeric($boardId)) {
            $this->boardId = $boardId;
        } else {
            $this->boardId = '0';
        }

        if (!empty($userId) && is_numeric($userId)) {
            $this->userId = $userId;
        }

        $this->table = 'messages';
        $this->decryptionTable = 'decryptions_messages';
        $this->anonDecryptionTable = 'decryptions_anon_messages';
        $this->copiedCiphersTable = 'copied_ciphers';

        $this->point_model = new Point_model($this->db);
        $this->group_model = new Group_model($this->db);
    }

    public function getMessages($options = null, $orders = null, $limitOffset = null, $count = false)
    {
        $select = $this->db->select();

        if (!$count) {
            $select->from(array($this->table), array('*', '(SELECT count( message_id ) FROM ' . $this->decryptionTable . ' WHERE message_id = ' . $this->table . '.id) AS decrypted', '(SELECT count( message_id ) FROM ' . $this->anonDecryptionTable . ' WHERE message_id = ' . $this->table . '.id) AS anon_decrypted'));

            if (!empty($this->userId)) {
                $select->joinLeft($this->copiedCiphersTable, $this->copiedCiphersTable . '.message_id = ' . $this->table . '.id AND ' . $this->copiedCiphersTable . '.user_id = ' . $this->db->quote($this->userId), $this->copiedCiphersTable . '.message_id AS copied');
            }

            $select->joinLeft('difficulties', 'difficulties.id = ' . $this->table . '.difficulty_id', 'difficulties.difficulty_name');
            $select->joinLeft('themes', 'themes.id = ' . $this->table . '.theme_id', 'themes.theme_name');
            $select->joinLeft('ciphers', 'ciphers.id = ' . $this->table . '.cipher_id', 'ciphers.cipher_name');
            $select->joinLeft('points_difficulties', 'points_difficulties.difficulty_id = messages.difficulty_id', 'points_difficulties.points AS difficulty_points');
            $select->joinLeft('points_ciphers', 'points_ciphers.cipher_id = messages.cipher_id', array('points_ciphers.points AS cipher_points', 'revealed_points', 'unrevealed_points'));
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

        if (is_numeric($this->boardId)) {
            $select->where($this->table . '.board_id = ?', $this->boardId);
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

    public function getMessagesPaginate($options = null, $orders = null, $limitOffset = null, $showAll = false )
    {
        $options = array();

        if (empty($limitOffset)) {
            $limitOffset = 0;
        }

        if (!$showAll) {
            $options[$this->table . '.published'] = '1';
        }

        return $this->getMessages($options, $orders, $limitOffset);
    }

    public function countMessages($showAll = false)
    {
        $options = array();

        if (!$showAll) {
            $options['published'] = 1;
        }

        $rows = $this->getMessages($options);

        return count($rows);
    }

    public function countDecryptions($messageId)
    {
        $sql = "SELECT COUNT(message_id) FROM " . $this->decryptionTable . " WHERE message_id = ?";
        $sqlAnon = "SELECT COUNT( id ) FROM " . $this->anonDecryptionTable . " WHERE message_id = ?";

        try {
            (int)$totalLoggedIn = $this->db->fetchOne($sql, $messageId);
            (int)$totalAnon = $this->db->fetchOne($sqlAnon, $messageId);
            (int)$total = $totalLoggedIn + $totalAnon;

            return is_numeric($total) ? $total : '0';
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    function save($userId, $message, $cipher, $cipherText, $keyA, $keyB, $difficulty, $theme, $showCipher, $messageId = null)
    {
        $field_values['user_id'] = $userId;
        $field_values['message'] = $message;
        $field_values['cipher_id'] = $cipher;
        $field_values['cipher_text'] = $cipherText;
        $field_values['key_a'] = $keyA;
        $field_values['key_b'] = $keyB;
        $field_values['difficulty_id'] = $difficulty;
        $field_values['theme_id'] = $theme;
        $field_values['board_id'] = $this->boardId;
        $field_values['show_cipher'] = $showCipher;
        $field_values['created_on'] = date("Y-m-d H:i:s");
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->insert($this->table, $field_values);

            return $this->db->lastInsertId();
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function delete($messageId)
    {
        try {
            $this->db->delete($this->table, 'id = ' . $this->db->quote($messageId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function getMessage($id)
    {
        $options = array();
        $options[$this->table . '.id'] = $id;

        $messages = $this->getMessages($options);

        return $messages['0'];
    }

    public function update($userId, $message, $cipher, $cipherText, $keyA, $keyB, $difficulty, $theme, $showCipher, $messageId)
    {
        $field_values['user_id'] = $userId;
        $field_values['message'] = $message;
        $field_values['cipher_id'] = $cipher;
        $field_values['cipher_text'] = $cipherText;
        $field_values['key_a'] = $keyA;
        $field_values['key_b'] = $keyB;
        $field_values['difficulty_id'] = $difficulty;
        $field_values['theme_id'] = $theme;
        $field_values['show_cipher'] = $showCipher;
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->update($this->table, $field_values, $this->table . '.id = ' . $this->db->quote($messageId));

            return $messageId;
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function publish($messageId)
    {
        $field_values['published'] = '1';

        try {
            $this->db->update($this->table, $field_values, $this->table . '.id = ' . $this->db->quote($messageId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function unpublish($messageId)
    {
        $field_values['published'] = '0';

        try {
            $this->db->update($this->table, $field_values, $this->table . '.id = ' . $this->db->quote($messageId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function can_edit($userId, $messageId, $groupId = null)
    {
        if (is_admin($this->db, $userId) || $this->is_owner($userId, $messageId)) {
            return true;
        } else {
            return false;
        }
    }

    public function is_owner($userId, $messageId)
    {
        if (!empty($userId)) {
            $sql = "SELECT user_id FROM " . $this->table . " WHERE id = ? AND user_id = ?";

            try {
                $nUserId = $this->db->fetchOne($sql, array($messageId, $userId));

                if ($nUserId == $userId) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                errorCheck($e, __LINE__, __FILE__);
            }
        } else {
            return false;
        }
    }

    public function saveDecryption($userId, $messageId, $rawData)
    {
        $field_values[] = $userId;
        $field_values[] = $messageId;
        $field_values[] = $rawData;
        $field_values[] = date("Y-m-d H:i:s");
        $field_values[] = date("Y-m-d H:i:s");

        $sql = $this->db->quoteInto("INSERT IGNORE INTO " . $this->decryptionTable . " ( user_id, message_id, raw_data, created_on, updated_on ) VALUES( ? ) ON DUPLICATE KEY UPDATE updated_on = VALUES( updated_on )", $field_values);

        try {
            $this->db->query($sql);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function isMessageCracked($userId, $messageId)
    {
        if (!empty($userId)) {

            $sql = "SELECT id FROM " . $this->decryptionTable . " WHERE user_id = ? AND message_id = ?";

            try {
                $id = $this->db->fetchOne($sql, array($userId, $messageId));

                if (!empty($id) && is_numeric($id)) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                errorCheck($e, __LINE__, __FILE__);
            }
        } else {
            return false;
        }
    }

    public function isAnonMessageCracked($sessionId, $messageId )
    {
        if (!empty($sessionId)) {

            $sql = "SELECT id FROM " . $this->anonDecryptionTable . " WHERE session_id = ? AND message_id = ?";
            el( $sql );
            try {
                $id = $this->db->fetchOne($sql, array($sessionId, $messageId));

                if (!empty($id) && is_numeric($id)) {
                    return true;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                errorCheck($e, __LINE__, __FILE__);
            }
        } else {
            return false;
        }
    }

    public function saveCopied($userId, $messageId)
    {
        $field_values[] = $userId;
        $field_values[] = $messageId;
        $field_values[] = date("Y-m-d H:i:s");
        $field_values[] = date("Y-m-d H:i:s");

        try {
            $sql = $this->db->quoteInto("INSERT IGNORE INTO " . $this->copiedCiphersTable . " (id, user_id, message_id, created_on, updated_on ) VALUES ( null, ?) ON DUPLICATE KEY UPDATE updated_on = VALUES( updated_on )", $field_values);
            $this->db->query($sql);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    /**
     *
     */
    public function get_all_user_message_data($userId, $boardId = null)
    {
        $cipherModel = new Cipher_model($this->db);
        $ciphers = $cipherModel->get_ciphers();

        $diffModel = new Difficulty_model($this->db);
        $difficulties = $diffModel->get_difficulties();


        $sql = "Select " . $this->table . ".id AS message_id, cipher_name, difficulty_name
                FROM " . $this->decryptionTable . "
                LEFT JOIN " . $this->table . " ON " . $this->table . ".id = " . $this->decryptionTable . ".message_id
                LEFT JOIN ciphers ON ciphers.id = " . $this->table . ".cipher_id
                LEFT JOIN difficulties ON difficulties.id = " . $this->table . ".difficulty_id
                WHERE " . $this->decryptionTable . ".user_id = ?";

        if (!empty($boardId)) {
            $sql .= " AND board_id = " . $this->db->quote($boardId);
        }

        $sql .= "
                ORDER BY cipher_name, difficulties.display_order";

        try {
            $rawMessages = $this->db->fetchAll($sql, $userId);

            $messages = array();
            $diffArray = array();
            $totalCompleted = 0;
            $totalPoints = 0;

            foreach ($rawMessages as $key => $message) {

                if (!empty($message['message_id']) && !empty($message['cipher_name'])) {

                    if (empty($messages[$message['cipher_name']][$message['difficulty_name']]['total'])) {
                        $messages[$message['cipher_name']][$message['difficulty_name']]['total'] = 0;
                    }
                    $messages[$message['cipher_name']][$message['difficulty_name']]['total']++;

                    $messages[$message['cipher_name']][$message['difficulty_name']]['points'] = $this->get_user_points($userId, $message['message_id']);

                    $totalPoints += $messages[$message['cipher_name']][$message['difficulty_name']]['points'];
                    $totalCompleted++;

                    foreach ($difficulties as $difficulty) {
                        $diffArray[$difficulty['difficulty_name']]['total'] = 0;
                        $diffArray[$difficulty['difficulty_name']]['points'] = 0;

                        if (empty($messages[$message['cipher_name']][$difficulty['difficulty_name']])) {
                            $messages[$message['cipher_name']][$difficulty['difficulty_name']]['total'] = '0';
                            $messages[$message['cipher_name']][$difficulty['difficulty_name']]['points'] = '0';
                        }
                    }
                }
            }

            // if the user hasn't decrypted any messages then we need to make the difficulty array
            if (empty($diffArray)) {
                foreach ($difficulties as $difficulty) {
                    $diffArray[$difficulty['difficulty_name']]['total'] = 0;
                    $diffArray[$difficulty['difficulty_name']]['points'] = 0;
                }
            }
            foreach ($ciphers as $cipher) {

                if (empty($messages[$cipher['cipher_name']])) {
                    $messages[$cipher['cipher_name']] = array();
                    $messages[$cipher['cipher_name']] = $diffArray;
                }
            }

            $messages['totalPoints'] = $totalPoints;
            $messages['totalCompleted'] = $totalCompleted;

            return $messages;
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function get_user_completed($userId)
    {
        $sql = "SELECT count( id ) AS total FROM " . $this->decryptionTable . " WHERE user_id = ?";

        try {
            $total = $this->db->fetchOne($sql, $userId);
            return !empty($total) ? $total : 0;
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function get_user_points($userId, $messageId = null)
    {
        $points = 0;
        $decryptions = $this->get_user_decryptions($userId, $messageId);

        if (is_array($decryptions)) {

            foreach ($decryptions as $decryption) {
                $points += $this->point_model->calculate_message_points($decryption);
            }
        }

        return $points;
    }

    public function get_user_decryptions($userId, $messageId = null)
    {
        $sql = "SELECT " . $this->table . ".show_cipher,
        points_ciphers.revealed_points,
        points_ciphers.unrevealed_points,
        points_ciphers.points AS cipher_points,
        points_difficulties.points AS difficulty_points
        FROM " . $this->decryptionTable . "
        JOIN " . $this->table . " ON " . $this->table . ".id = " . $this->decryptionTable . ".message_id
        LEFT JOIN points_difficulties ON points_difficulties.difficulty_id = " . $this->table . ".difficulty_id
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

    public function getMessagesByUser($userId, $orders = null )
    {
        $options = array();
        $options['messages.user_id'] = $userId;

        return $this->getMessages($options, $orders);
    }

    public function saveAnon($sessionId, $messageId, $ip, $rawData)
    {
        $field_values[] = $sessionId;
        $field_values[] = $messageId;
        $field_values[] = $ip;
        $field_values[] = is_array($rawData) ? serialize($rawData) : $rawData;
        $field_values[] = date("Y-m-d H:i:s");
        $field_values[] = date("Y-m-d H:i:s");

        $sql = $this->db->quoteInto("INSERT IGNORE INTO " . $this->anonDecryptionTable . " ( session_id, message_id, ip, raw_data, created_on, updated_on ) VALUES( ? ) ON DUPLICATE KEY UPDATE updated_on = VALUES( updated_on )", $field_values);

        try {
            $this->db->query($sql);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function deleteAnonDecryption($id)
    {
        try {
            $this->db->delete($this->anonDecryptionTable, 'id = ' . $id);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    /**
     * Checks if a session id has decrypted message already
     * @param $sessionId
     * @param $messageId
     * @return mixed
     */
    public function has_anon_decrypted($sessionId, $messageId)
    {
        $sql = "SELECT id FROM " . $this->anonDecryptionTable . " WHERE session_id = ? AND message_id = ?";

        try {
            return $this->db->fetchAll($sql, array($sessionId, $messageId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    /**
     * Checks if user has decrypted message already
     * @param $userId
     * @param $messageId
     * @return mixed
     */
    public function has_decrypted($userId, $messageId)
    {
        $sql = "SELECT id FROM " . $this->decryptionTable . " WHERE user_id = ? AND message_id = ?";

        try {
            return $this->db->fetchAll($sql, array($userId, $messageId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }
}