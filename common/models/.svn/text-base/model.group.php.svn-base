<?php

class Group_model {

    function __construct($db) {
        $this->db = $db;
    }

    function get_groups($options = null, $orders = null) {
        $select = $this->db->select();
        $select->from('groups');
        $select->joinLeft('group_board_details', 'group_board_details.group_id = groups.id', array('fname', 'lname'));

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

        if (!empty($orders) && is_array($orders)) {
            foreach ($orders as $fieldName => $direction) {
                $select->order($fieldName, $direction);
            }
        } else {
            $select->order('groups.group_name', 'ASC');
        }

        $stm = $this->db->query($select);

        return $stm->fetchAll();
    }

    public function get_groups_by_owner_id($userId) {
        $options['groups.user_id'] = $userId;

        return $this->get_groups($options);
    }

    public function get_groups_by_user_id($userId) {
        if (is_numeric($userId)) {
            $sql = "SELECT groups.*, group_board_details.fname, group_admins.user_id AS isAdmin  FROM users_2_groups
                LEFT JOIN groups ON groups.id = users_2_groups.group_id
                LEFT JOIN group_board_details ON group_board_details.group_id = groups.id
                LEFT JOIN group_admins ON group_admins.user_id = users_2_groups.user_id AND group_admins.group_id = users_2_groups.group_id
                WHERE users_2_groups.user_id = ? AND groups.user_id != ?";

            try {
                return $this->db->fetchAll($sql, array($userId, $userId));
            } catch (Exception $e) {
                errorCheck($e, __LINE__, __FILE__);
            }
        } else {
            return array();
        }
    }

    public function get_group($groupId) {
        $options['groups.id'] = $groupId;

        $groups = $this->get_groups($options);

        return isset($groups['0']) ? $groups['0'] : false;
    }

    function create_group($userId, $groupName, $password) {
        $id = false;

        $field_values['user_id'] = $userId;
        $field_values['group_name'] = $groupName;
        $field_values['password'] = base64_encode(rc4($password));
        $field_values['created_on'] = date("Y-m-d H:i:s");
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->insert('groups', $field_values);

            $id = $this->db->lastInsertId();

            $this->addGroupAdmin($userId, $id);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        return $id;
    }

    function delete_group($userId, $groupId) {
        if ($this->is_group_owner($userId, $groupId)) {
            try {
                return $this->db->delete('groups', 'id = ' . $this->db->quote($groupId));
            } catch (Exception $e) {
                errorCheck($e, __LINE__, __FILE__);
            }
        } else {
            setMsg('You are not the owner of this group', 'error');
            return false;
        }
    }

    function is_group_owner($userId, $groupId) {
        $sql = "SELECT id FROM groups WHERE user_id = ? AND id = ?";

        try {
            $newGroupId = $this->db->fetchOne($sql, array($userId, $groupId));

            if (isset($newGroupId) && $newGroupId == $groupId) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function get_group_by_group_id($groupAccessId, $password) {
        $sql = "SELECT id FROM groups WHERE access_id= ? AND password = ?";

        try {
            $groupId = $this->db->fetchOne($sql, array($groupAccessId, $password));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        return !empty($groupId) ? $groupId : false;
    }

    public function add_user_to_group($userId, $groupId) {
        $field_values['user_id'] = $userId;
        $field_values['group_id'] = $groupId;
        $field_values['created_on'] = date("Y-m-d H:i:s");
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        $sql = "INSERT IGNORE INTO users_2_groups( user_id, group_id, created_on, updated_on ) 
            VALUES ( ?, ?, ?, ? ) ON DUPLICATE KEY UPDATE updated_on = updated_on";
        try {
            $stm = $this->db->prepare($sql);
            return $stm->execute(array($userId, $groupId, date("Y-m-d H:i:s"), date("Y-m-d H:i:s")));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function get_users($groupId) {
        $sql = "SELECT users.id AS user_id, 
            users.username,
            users.codename,
            users.codename_counter,
            users_2_groups.group_id, 
            group_admins.user_id as isAdmin, 
            groups.user_id AS isOwner 
            FROM users_2_groups 
            LEFT JOIN users ON users.id = users_2_groups.user_id
            LEFT JOIN group_admins ON group_admins.user_id = users.id AND group_admins.group_id = ?
            LEFT JOIN groups ON groups.user_id = users_2_groups.user_id AND groups.id = users_2_groups.group_id
            WHERE users_2_groups.group_id = ?";

        try {
            $users = $this->db->fetchAll($sql, array($groupId, $groupId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        return is_array($users) ? $users : false;
    }

    public function validate_group($groupId, $password) {
        $sql = "SELECT id FROM groups WHERE id = ? AND password = ?";

        try {
            $newGroupId = $this->db->fetchOne($sql, array($groupId, base64_encode(rc4($password))));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }

        return ($newGroupId == $groupId ? true : false);
    }

    public function remove_user_from_group($userId, $groupId) {
        try {
            return $this->db->delete('users_2_groups', 'user_id = ' . $this->db->quote($userId) . ' AND group_id = ' . $this->db->quote($groupId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function update_group($groupId, $groupName, $password) {
        $field_values['group_name'] = $groupName;
        $field_values['password'] = base64_encode(rc4($password));
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->update('groups', $field_values, 'groups.id = ' . $this->db->quote($groupId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function does_access_id_exist($accessId, $groupId = null) {
        $sql = "SELECT access_id FROM groups WHERE access_id = " . $this->db->quote($accessId);

        if (!empty($groupId) && is_numeric($groupId)) {
            $sql .= " AND id = " . $this->db->quote($groupId);
        }

        try {
            $currentAccessId = $this->db->fetchOne($sql);

            if ($accessId == $currentAccessId) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function user_in_owner_group($ownerId, $userId) {
        $sql = "SELECT user_id FROM users_2_groups WHERE group_id IN ( SELECT id FROM groups WHERE user_id = ? ) AND user_id = ?";

        try {
            $retrievedId = $this->db->fetchOne($sql, array($ownerId, $userId));

            if (!empty($retrievedId) && $retrievedId == $userId) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function is_user_in_group($userId, $groupId) {

        $sql = "SELECT user_id FROM users_2_groups WHERE user_id = ? AND group_id = ?";

        $data = array();
        $data[] = $userId;
        $data[] = $groupId;

        try {
            $nUserId = $this->db->fetchOne($sql, $data);

            if ($userId == $nUserId) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function activate_group($userId, $groupId, $fname, $lname, $schoolName, $classroomName, $phone, $email) {
        $field_values['user_id'] = $userId;
        $field_values['group_id'] = $groupId;
        $field_values['fname'] = $fname;
        $field_values['lname'] = $lname;
        $field_values['school_name'] = $schoolName;
        $field_values['classroom_name'] = $classroomName;
        $field_values['phone'] = $phone;
        $field_values['email'] = $email;
        $field_values['created_on'] = date("Y-m-d H:i:s");
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->insert('group_board_details', $field_values);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function is_group_admin($userId, $groupId) {
        $sql = "SELECT user_id FROM group_admins WHERE user_id = ? AND group_id = ?";

        try {
            $tmpUserId = $this->db->fetchOne($sql, array($userId, $groupId));

            if ($tmpUserId == $userId) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updateAllowEditing($groupId, $allowEditing) {
        $field_values['allow_editing'] = $allowEditing == 'true' ? '1' : '0';
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->update('groups', $field_values, 'groups.id = ' . $this->db->quote($groupId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function updateAutoApprove($groupId, $autoApprove) {
        $field_values['auto_approve'] = $autoApprove == 'true' ? '1' : '0';
        $field_values['updated_on'] = date("Y-m-d H:i:s");

        try {
            $this->db->update('groups', $field_values, 'groups.id = ' . $this->db->quote($groupId));
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function addGroupAdmin($userId, $groupId) {
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

    public function removeGroupAdmin($userId, $groupId) {
        $sql = 'user_id = ? AND group_id = ?';
        $sql = $this->db->quoteInto($sql, $userId);
        $sql = $this->db->quoteInto($sql, $groupId);

        try {
            $this->db->delete('group_admins', $sql);
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

    public function update_value($groupId, $field, $value) {
        $field_values[$field] = $value;

        try {
            $this->db->update( 'groups', $field_values, 'id = ' . $groupId );
                    
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    }

}