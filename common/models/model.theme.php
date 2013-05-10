<?php

class Theme_model
{

    function __construct( $db, $groupId = '0' )
    {
        if ( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception( 'invalid db' );
        }
        
        if( is_numeric( $groupId ) ) {
            $this->groupId = $groupId;
        }
    }

    function get_themes()
    {
        $select = $this->db->select();
        $select->from( array( 'themes' ) );
        $select->where( 'board_id = ?', $this->groupId );
        $select->order( 'theme_name ASC' );
        
        try {
            $stm = $select->query();
            $results = $stm->fetchAll();
            
            return $results;
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }
    
    function add_theme( $userId, $themeName, $type = 'db', $groupId = '0' )
    {
        switch( $type ) {
            case "db":
            case "xml":
                return $this->{'add_theme_' . $type}( $userId, $themeName, $groupId );
                break;
            default:
                throw new Exception ( 'invalid arguement' );
                break;
        }
    }
    
    function add_theme_db( $userId, $themeName, $groupId = 0 )
    {
        $date = date( "Y-m-d H:i:s" );
        $groupId = empty( $groupId ) ? '0' :  $groupId;
        $data = array( 'user_id' => $userId, 
                       'theme_name' => $themeName, 
                       'board_id' => $groupId, 
                       'created_on' => $date, 
                       'updated_on' => $date );
        try {
            $this->db->insert( 'themes', $data );
            
            $id = $this->db->lastInsertId();
            
            return $id;
        }
        catch ( Exception $e ) {
            errorCheck( $e, __LINE__, __FILE__ );
        }
    }
    
    /**
     * This method is outdated do not use without updating it and contemplateing the xml scheme first
     * @param type $userId
     * @param type $themeName
     * @param type $groupId
     * @return type 
     */
    function add_theme_xml( $userId, $themeName, $groupId )
    {
        $themes = $this->xmlObj->xPath( '/root/themes' );

        $newTheme = $this->xmlObj->themes->addChild( 'theme' );

        $newTheme->addChild( 'name', $themeName );

        file_put_contents( MESSAGE_OPTIONS, $this->xmlObj->asXML() );

//        $json = json_encode( array( 'newThemeId' => ( count( $this->xmlObj->themes->theme ) - 1 ) ) );

        return (count( $this->xmlObj->themes->theme ) - 1);
    }

}