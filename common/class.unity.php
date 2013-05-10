<?php

/**
 * User_model $user_model
 * Game_model $gameModel
 */
class Unity {

    public $db;
    public $version = '1';

    function __construct( $db )
    {
        if ( is_object( $db ) ) {
            $this->db = $db;
        }

        $this->user_model = new User_model( $this->db );
        $this->game_model = new Game_model( $this->db );
    }

    function authenticateUser( $username, $password, $format = 'bool' )
    {
        $username = (string) $username;
        $password = (string) $password;

        return $this->user_model->authenticate( $username, $password );
    }

    function saveGame( $userId, $xmlRequest, $gameId )
    {
        if ( $gameId = $this->game_model->save_game( $userId, $xmlRequest, $gameId ) ) {
            $response = $this->generateResponse( 1, 'game saved', array( 'game_id' => $gameId ) );
        }
        else {
            $response = $this->generateResponse( 0, 'problem saving game' );
        }
        return $response;
    }

    function updateGame( $xml )
    {
        
    }

    function deleteGame( $xml )
    {
        
    }

    function loadGame( $gameId )
    {
        $gameData = $this->game_model->get_game( $gameId );

        $results = $this->_formatLoadGameXML( array( $gameData ) );

        return $results;
    }

    function loadGames( $userId )
    {
        $games = $this->game_model->get_games( $userId );
        $results = $this->_formatLoadGameXML( $games );
        
        return $results;
    }

    function _formatLoadGameXML( $rows )
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<root>' . PHP_EOL;
        $xml .= '<success>1</success>' . PHP_EOL;
        $xml .= '<msg>data loaded</msg>' . PHP_EOL;
        $xml .= '<version>' . $this->version . '</version>' . PHP_EOL;
        $xml .= '<games>' . PHP_EOL;

        if ( is_array( $rows ) && count( $rows ) > 0 ) {
            foreach ( $rows as $row ) {
                $xml .= '<game>' . PHP_EOL;
                $xml .= '<game_id>' . $row['id'] . '</game_id>';
                $xml .= '<user_id>' . $row['user_id'] . '</user_id>';
                $xml .= '<game_data>' . $row['game_data'] . '</game_data>';
                $xml .= '</game>' . PHP_EOL;
            }
        }

        $xml .= '</games>' . PHP_EOL;
        $xml .= '</root>' . PHP_EOL;

        return $xml;
    }

    function createUser( $xml )
    {
        $username = (string) $xml->username;
        $password = (string) $xml->password;
        $codename = (string) $xml->codename;

        $userCheckResponse = $this->user_model->usernameExist( $username );

        if ( strlen( $username ) == 0 ) {
            exit( $this->generateResponse( 0, 'username required' ) );
        }

        if ( $userCheckResponse ) {
            exit( $this->generateResponse( 0, 'username exists' ) );
        }

        if ( strlen( $password ) == 0 ) {
            exit( $this->generateResponse( 0, 'password required' ) );
        }

        if ( strlen( $password ) < 6 ) {
            exit( $this->generateResponse( 0, 'password must be 6 or more characters' ) );
        }

        $field_values['username'] = $username;
        $field_values['password'] = $this->user_model->encryptPassword( $password, $username );
        $field_values['codename'] = $codename;
        $field_values['created_on'] = date( "Y-m-d H:i:s" );
        $field_values['updated_on'] = date( "Y-m-d H:i:s" );

        try {
            $this->db->insert( 'users', $field_values );
            $response = $this->generateResponse( 1, 'user created' );
        }
        catch ( Exception $e ) {
            echo $this->generateResponse( 0, 'error saving user' );
            errorCheck( $e, __LINE__, __FILE__ );
        }

        return $response;
    }

    function generateResponse( $success, $message, $data = null )
    {
        $xmlData = array( );
        $xmlData['success'] = $success;
        $xmlData['msg'] = $message;

        if ( is_array( $data ) ) {
            $xmlData = array_merge( $xmlData, $data );
        }

        $xmlData = array_flip( $xmlData );
        $xml = new SimpleXMLElement( '<root/>' );
        array_walk_recursive( $xmlData, array( $xml, 'addChild' ) );

        return $xml->asXML();
    }
    
    function getUserId()
    {
        if( isset( $_SESSION['auth']['user_id'] ) ) {
            return $this->generateResponse(1, 'user logged in', array( 'user_id' => $_SESSION['auth']['user_id'] ) );
        }
        else {
            return $this->generateResponse( 0, 'user not logged in' );
        }
    }
}