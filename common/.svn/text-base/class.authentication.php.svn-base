<?php 

class Authentication {
    
    function __construct( $db )
    {
        
        if( !getUserId() ) {
            $_SESSION['return'] = $_SERVER['PHP_SELF'];
            
            header( "location: /register.php" );
            exit;
        }
        
        // theck groups
        $page = end( explode( '/', $_SERVER['PHP_SELF'] ) );
        
        if( $page == 'admin_message_board.php' ) {
            if( !is_admin( $db, getUserId() ) ) {
                header( "location: /profile.php" );
                exit;
            }
        }
        
        if( $page == 'group_message_board.php' ) {
            $this->group_model = new Group_model( $db );
            
            if( !$this->group_model->is_user_in_group( getUserId(), $_REQUEST['groupId'] ) &&  !is_admin( $db, getUserId() ) ) {
                setMsg( msg( 'group-invalid-authentication'), 'error' );
                header( "location: /profile.php" );
                exit;
            }
        }
        
        if( $page == 'admin_group_message_board.php' ) {
//            $this->group_model = new Group_model( $db );
//            
//            if( !isset( $_REQUEST['groupId'] ) || !$this->group_model->is_group_owner( getUserId(), $_REQUEST['groupId'] ) && !$this->group_model->is_group_admin( getUserId(), $_REQUEST['groupId'] )) {
//                 header( "location: /profile.php" );
//                exit;
//            }
        }
    }
}