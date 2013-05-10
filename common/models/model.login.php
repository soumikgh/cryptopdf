<?php

class Login_model {

    const TABLE = 'login_log';

    function __construct( $db )
    {
        $this->db = $db;
    }

    public function log( $userId )
    {
        $field_values['user_id'] = $userId;
        $field_values['session_id'] = session_id();
        $field_values['created_on'] = date( "Y-m-d H:i:s" );
        $field_values['updated_on'] = date( "Y-m-d H:i:s" );

        try {
            $this->db->insert( 'login_log', $field_values );
        }
        catch ( exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    function update_session( $userId )
    {
        $field_values['updated_on'] = date( "Y-m-d H:i:s" );

        try {
            $this->db->update( 'logins', $field_values, 'user_id = ' . $this->db->quote( $userId ) );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    public function getLastLogin( $userId )
    {
        $sql = "SELECT created_on FROM " . self::TABLE . " WHERE user_id = ? ORDER BY created_on DESC";

        try {
            $value = $this->db->fetchOne( $sql, $userId );

            return $value;
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    public function getNumLogins( $userId )
    {
        $sql = "SELECT count( id ) FROM " . self::TABLE . " WHERE user_id = ?";

        try {
            return $this->db->fetchOne( $sql, $userId );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    public function getDurationOfEachSession( $userId )
    {
        $sql = "SELECT created_on, updated_on FROM login_log WHERE user_id = ? ORDER BY created_on DESC";

        try {
            return $this->db->fetchAll( $sql, $userId );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    public function regen_session_id()
    {
        return session_regenerate_id();
    }

    public function getStartOfEachSession( $userId )
    {
        $sql= "SELECT created_on FROM login_log WHERE user_id = ? ORDER BY created_on DESC";
        
        try {
            return $this->db->fetchAll( $sql, $userId );
        }
        catch( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }
}