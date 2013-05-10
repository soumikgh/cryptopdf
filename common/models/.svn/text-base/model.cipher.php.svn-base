<?php

class Cipher_model
{

    function __construct( $db )
    {
        if ( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception( 'invalid db' );
        }
    }

    function get_ciphers( $forMessageBoard = true )
    {
        $sql = "SELECT * FROM ciphers";
        
        if( $forMessageBoard ) {
            $sql .= ' WHERE show_on_message_board = 1';
        }

        try {
            return $this->db->fetchAll( $sql );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    public function save_cipher_points( $cipherId, $revealedPoints, $unrevealedPoints )
    {
        $field_values[] = $cipherId;
        $field_values[] = $revealedPoints;
        $field_values[] = $unrevealedPoints;
        $field_values[] = date( "Y-m-d H:i:s" );
        $field_values[] = date( "Y-m-d H:i:s" );

        try {
            $sql = "INSERT IGNORE INTO points_ciphers (id, cipher_id, revealed_points, unrevealed_points, created_on, updated_on ) VALUES ( '',?) ON DUPLICATE KEY UPDATE revealed_points=VALUES(revealed_points), unrevealed_points=VALUES(unrevealed_points),updated_on = VALUES(updated_on)";
            $sql = $this->db->quoteInto( $sql, $field_values );

            $this->db->query( $sql );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    public function get_points()
    {
        $sql = "SELECT * FROM points_ciphers";

        try {
            return $this->db->fetchAll( $sql );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

}