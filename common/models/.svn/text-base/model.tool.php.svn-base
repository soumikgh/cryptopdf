<?php

class Tool_model
{
    private $table = 'decryptions_tools';
    private $ciphers;


    function __construct($db)
    {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            throw new Exception('invalid db');
        }

        $this->point_model = new Point_model($this->db);
        $this->cipher_model = new Cipher_model($this->db);
        $this->ciphers = $this->cipher_model->get_ciphers(false);
    }

    function save($userId, $cipherName, $messageId, $action, $rawData)
    {
        $field_values['user_id'] = $userId;
        $field_values['cipher_id'] = $this->translateCipherToId($cipherName);
        $field_values['message_id'] = $messageId;
        $field_values['action'] = $action;
        $field_values['raw_data'] = $rawData;
        $field_values['created_on'] = date("Y-m-d H:i:s");
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        $sql = "INSERT IGNORE INTO " . $this->table . " ( id, user_id, cipher_id, message_id, action, raw_data, created_on, updated_on ) VALUES ('', ? ) ON DUPLICATE KEY UPDATE raw_data = VALUES(raw_data), updated_on = VALUES( updated_on)";
        $sql = $this->db->quoteInto($sql, $field_values);

        try {
            $this->db->query($sql);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function get_user_completed($userId)
    {
        $cipherModel = new Cipher_model($this->db);
        $ciphers = $cipherModel->get_ciphers();

        $actions = array('decrypt', 'encrypt');

        $sql = "SELECT cipher_name, action, " . $this->table . ".cipher_id
                FROM " . $this->table . "
                LEFT JOIN ciphers ON ciphers.id = " . $this->table . ".cipher_id
                WHERE " . $this->table . ".user_id = ?";

        try {
            $rawTools = $this->db->fetchAll($sql, $userId);

            $tools = array();
            $totalCompleted = 0;
            $totalPoints = 0;

            foreach ($rawTools as $tool) {

                if (empty($tools[$tool['cipher_name']][$tool['action']]['total'])) {
                    $tools[$tool['cipher_name']][$tool['action']]['total'] = 0;
                }

                if (empty($tools[$tool['cipher_name']][$tool['action']]['points'])) {
                    $tools[$tool['cipher_name']][$tool['action']]['points'] = 0;
                }
                $tools[$tool['cipher_name']][$tool['action']]['total']++;
                $totalCompleted++;

                $tools[$tool['cipher_name']][$tool['action']]['points'] += $this->get_user_points($tool);
                //$totalPoints += $tools[$tool['cipher_name']][$tool['action']]['points'];

                if (empty($tools[$tool['cipher_name']]['encrypt'])) {
                    $tools[$tool['cipher_name']]['encrypt'] = array('total' => '0', 'points' => '0');
                } else if (empty($tools[$tool['cipher_name']]['decrypt'])) {
                    $tools[$tool['cipher_name']]['decrypt'] = array('total' => '0', 'points' => '0');
                }
            }

            foreach ($ciphers as $cipher) {
                if (empty($tools[$cipher['cipher_name']])) {
                    $tools[$cipher['cipher_name']] = array('decrypt' => array('total' => '0', 'points' => '0'), 'encrypt' => array('total' => '0', 'points' => '0'));
                } else {
                    $totalPoints += $tools[$cipher['cipher_name']]['encrypt']['points'];
                    $totalPoints += $tools[$cipher['cipher_name']]['decrypt']['points'];
                }
            }

            $tools['totalPoints'] = $totalPoints;
            $tools['totalCompleted'] = $totalCompleted;

            return $tools;
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function get_user_points($tool = null, $userId = null )
    {
        if (empty($tool)) {
            $points = 0;

            $sql = "SELECT * FROM " . $this->table . " WHERE user_id = ?";

            if (!empty($cipherId)) {
                $sql .= " AND cipher_id = " . $this->db->quote($cipherId);
            }

            try {
                $decryptions = $this->db->fetchAll($sql, $userId);

            } catch (Exception $e) {
                errorCheck($e, __LINE__, __FILE__);
            }

            if (isset($decryptions) && is_array($decryptions)) {
                foreach ($decryptions as $decryption) {
                    $points += $this->point_model->calculate_tool_points($decryption);
                }
            }
            return !empty($points) ? $points : 0;
        } else {
            return $this->point_model->calculate_tool_points($tool);
        }

    }

    public function translateCipherToId($cipherName)
    {
        $found = false;
        if (!empty($this->ciphers)) {
            foreach ($this->ciphers as $cipher) {
                if ($cipherName == strtolower($cipher['cipher_name'])) {
                    $cipherId = $cipher['id'];
                    $found = true;
                    break;
                }
            }
        }

        if (!$found) {
            switch ($cipherName) {
                case "letnum":
                    $cipherId = 7;
                    break;
                case "sub":
                    $cipherId = 8;
                    break;
                default:
                    mail(ADMIN_EMAIL, 'unknown cipher name found in: ' . __CLASS__, $cipherName . PHP_EOL . print_r($_SERVER, true));
                    break;
            }

        }

        return $cipherId;
    }

}