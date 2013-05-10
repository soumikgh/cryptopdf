<?php
/**
 * @property Group_model $group_model
 */
class Group
{
    
    public $groupId;
    public $groupName;
    public $groupUsers;
    public $joinUrl;
    public $autoApprove;
    public $allowEditing;
    
    function __construct( $db, $groupId )
    {
        if ( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception( 'invalid db object' );
        }

        $this->group_model = new Group_model( $this->db );

        $this->setProperties( $this->group_model->get_group( $groupId ) );
    }
    
    
    private function setProperties( $group )
    {
        $this->groupId = $group['id'];
        $this->groupName = $group['group_name'];
        $this->password = rc4( base64_decode( $group['password'] ) );
        $this->joinUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/groups/?groupId=' . $this->groupId;
        $this->allowEditing = $group['allow_editing'] == '1' ? true : false;
        $this->autoApprove = $group['auto_approve'] == '1' ? true : false;
        
        $this->groupUsers = $this->group_model->get_users( $this->groupId );
    }

    public function setAllowEditing( $allowEditing )
    {
        $this->group_model->updateAllowEditing( $this->groupId, $allowEditing );
    }
    
    public function isAdmin( $userId )
    {
        return $this->group_model->is_group_admin($userId, $this->groupId);
    }
    
    public function isOwner( $userId )
    {
        return $this->group_model->is_group_owner($userId, $this->groupId );
    }
    
    public function isInGroup( $userId )
    {
        return $this->group_model->is_user_in_group($userId, $this->groupId );
    }

    public function setAutoApprove( $autoApprove )
    {
        $this->group_model->updateAutoApprove( $this->groupId, $autoApprove );
    }

    public function updateValue( $field, $value ) {
        switch( $field ) {
            case "password":
                $plaintext = $value;
                $value = base64_encode( rc4( $value ) );
            case "group_name":
                $this->group_model->update_value( $this->groupId, $field, $value );
                echo !empty( $plaintext ) ? $plaintext : $value;
                break;
            default:
                break;
        }
    }
}