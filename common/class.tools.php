<?php
/**
 * @property Tool_model $tool_model 
 */
class Tools {
    
    function __construct( $db )
    {
        if( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception( 'invalid db' );
        }
        
        $this->tool_model = new Tool_model( $this->db );
    }
    
    /**
     *
     * @param int $messageId
     * @param str $action
     * @param str $rawData this is the REQUEST var serialized and base64_encoded
     */
    function save( $messageId, $action, $rawData )
    {
        if( !empty( $messageId ) && !empty( $action ) ) {
            $eMessageId = explode( '_', $messageId );
            
            // THis will be replaced with eMessageId['2']
            $messageId = end( $eMessageId );
            
            $this->tool_model->save( getUserId(), $eMessageId['0'], $messageId, $action, $rawData );
        }
    }
}