<?php

class Challenge_options
{

    public $ciphersArray;
    public $ciphersJSArray;
    public $themesArray;
    public $themesJSArray;
    public $difficultiesArray;
    public $difficultiesJSArray;
    public $xmlObj;
    public $difficulties;

    function __construct( $db, $groupId = '0' )
    {

        if ( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception( 'invalid db' );
        }

        $options = simplexml_load_file( MESSAGE_OPTIONS );
        $this->challenge_model = new Challengeoptions_model( $this->db );
        $this->difficulty_model = new Difficulty_model( $this->db );
        $this->theme_model = new Theme_model( $this->db, $groupId );
        $this->cipher_model = new Cipher_model( $this->db );
        
        $this->difficulties = $this->difficulty_model->get_difficulties();
        $this->themes = $this->theme_model->get_themes();
        $this->ciphers = $this->cipher_model->get_ciphers( true );
        
        $this->xmlObj = $options;
        $this->_process( $options );
    }

    function _process( $options )
    {
        $this->ciphersArray = array( );
        $this->themesArray = array( '' );
        $this->difficultiesArray = array( );

        $this->ciphersJSArray = '{0: "Choose Cipher"';
        $this->themesJSArray = '{0: "Choose Theme"';
        $this->difficultiesJSArray = '{0: "Choose Difficulty"';
        
        foreach( $this->ciphers as $cipher ) {
            $this->ciphersArray[] = $cipher['cipher_name'];
            $this->ciphersJSArray .= ',' . $cipher['id'] . ': "' . $cipher['cipher_name'] . '"';
        }
        
        foreach( $this->themes as $theme ) {
            if ( strlen( $theme['theme_name'] ) > 0 ) {
                $this->themesArray[$theme['id']] = $theme['theme_name'];
                $this->themesJSArray .= ',' . $theme['id'] . ':"' . $theme['theme_name'] . '"';
            }
        }

        foreach ( $this->difficulties as $difficulty ) {
            $this->difficultiesArray[] = $difficulty['difficulty_name'];
            $this->difficultiesJSArray .= ','.$difficulty['id'] . ': "' . $difficulty['difficulty_name'] . '"';
        }

        $this->ciphersJSArray .= '}';
        $this->themesJSArray .= '}';
        $this->difficultiesJSArray .= '}';
    }

    function addNewTheme( $userId, $themeName, $groupId = 0 )
    {
        if ( strlen( $themeName ) > 0 ) {
            $newThemeId = $this->theme_model->add_theme( $userId, $themeName, 'db', $groupId );
            
            $json = json_encode( array( 'newThemeId'=> $newThemeId )  );
            
        }
        else {
            $json = json_encode( array( 'error' => 'Theme name' ) );
        }

        return $json;
    }

}