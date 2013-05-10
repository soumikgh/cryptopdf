<?php

class Difficulty_model
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

    function get_difficulties()
    {
        $sql = "SELECT * FROM difficulties ORDER BY display_order ASC";

        try {
            $results = $this->db->fetchAll( $sql );

            return $results;
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    public function save_difficulty_points( $difficulty_id, $points )
    {
        $field_values[] = $difficulty_id;
        $field_values[] = $points;
        $field_values[] = date( "Y-m-d H:i:s" );
        $field_values[] = date( "Y-m-d H:i:s" );

        try {
            $sql = "INSERT IGNORE INTO points_difficulties (id, difficulty_id, points, created_on, updated_on ) VALUES ( '',?) ON DUPLICATE KEY UPDATE points = VALUES(points), updated_on = VALUES(updated_on)";
            $sql = $this->db->quoteInto( $sql, $field_values );

            $this->db->query( $sql );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

    public function get_points()
    {
        $sql = "SELECT * FROM points_difficulties";

        try {
            return $this->db->fetchAll( $sql );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }

}