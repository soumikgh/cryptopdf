<?php

/**
 * @property Message_model $message_model 
 */
class Point_model
{

    function __construct( $db )
    {
        if ( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception( 'invalid db' );
        }

        $this->__setup();
    }

    private function __setup()
    {
        $sql = "SELECT * FROM points_ciphers
            LEFT JOIN ciphers ON ciphers.id = points_ciphers.cipher_id";

        try {
            $cipherPoints = $this->db->fetchAll( $sql );
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
        
        if( !empty( $cipherPoints ) && count( $cipherPoints ) > 0 ) {
            foreach( $cipherPoints as $cipher ) {
                $name = strtolower( $cipher['cipher_name'] );
                
                $this->cipherPoints[$cipher['id']] = $cipher['points'];
            }
        }
    }

    public function get_points()
    {
        $sql = "SELECT * FROM points WHERE id = 1";

        try {
            $results = $this->db->fetchAssoc( $sql );

            return $results['1'];
        }
        catch ( Exception $e ) {
            
        }
    }

    public function calculate_message_points( $message )
    {
        // difficulty x  unrevealed/revealed
        if( isset( $message['difficulty_points'] ) ) {
            $points = $message['difficulty_points'];
        }
        // jokes don't have difficulties so start with base of 1
        else {
            $points = 1;
        }
        
        //$points = $points * $message['cipher_points'];

        if ( isset( $message['show_cipher'] ) && $message['show_cipher'] == '0' ) {
            $points = $points * $message['unrevealed_points'];
        }
        else {
            $points = $points * $message['revealed_points'];
        }

        return $points;
    }

    public function calculate_tool_points( $tool )
    {
        $points = 0;

        if( isset( $this->cipherPoints[$tool['cipher_id']] )) {
            $points += $this->cipherPoints[$tool['cipher_id']];
        }

        return $points;
    }

    public function calculate_game_points( $game )
    {
        return $game['points'];
    }

}