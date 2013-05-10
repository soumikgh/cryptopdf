<?php

class Codename_model
{

    function __construct( $db )
    {
        if ( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception( 'invalid db object' );
        }
    }

    function getNextNumber( $codename )
    {
        $sql = "SELECT current_count FROM codename_counter WHERE codename = ? FOR UPDATE";

        try {
            $number = $this->db->fetchOne( $sql, $codename );

            if( !isset( $number ) || empty( $number ) ) {
                $number = $this->createNewCodenameCounter($codename);
            }
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }

        $sql = "UPDATE codename_counter SET current_count=current_count+1 WHERE codename = ?";
        
        try {
            $this->db->query( $sql, $codename );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
        
        $number++;
        $number = str_pad( $number, 3, 0, STR_PAD_LEFT );
        
        return $number;
    }

    function createNewCodenameCounter( $codename )
    {
        $field_values['codename'] = $codename;
        $field_values['current_count'] = '0';
        $field_values['created_on'] = date( "Y-m-d H:i:s" );
        $field_values['updated_on'] = date( "Y-m-d H:i:s" );

        try {
            $this->db->insert( 'codename_counter', $field_values );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
        
        return '0';
    }

    public function get_codenames()
    {
        $sql = "SELECT id, codename FROM codename_counter ORDER BY codename";

        try {
            return $this->db->fetchAll( $sql );
        }
        catch( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

}