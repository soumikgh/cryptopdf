<?php
/**
 * @property Codename_model $codename_model 
 */
class Codenames {
    public $codenames;
    public $codenamesArray;
    public $codenamesImageArray;
    public $codenamesBiographyArray;
    public $codenamesJSArray;
    public $codenamesImageJSArray;
    public $codenamesBiographyJSArray;
    
    function __construct( $db )
    {
        if( is_object( $db ) ) {
            $this->db = $db;
        }
        else {
            throw new Exception ( 'invalid db object' );
        }
        $this->codename_model = new Codename_model( $this->db );
        $registrationData = simplexml_load_file( XML_OPTIONS );
        
        $this->codenames = $registrationData->codenames->codename;
        
        $this->_process();
    }
    
    private function _process()
    {
        $this->codenamesArray = array();
        
        $this->codenamesJSArray = '[""';
        $this->codenamesImageJSArray = '[""';
        $this->codenamesBiographyJSArray = '[""';
        
        for( $i = 0; $i < count( $this->codenames ); $i++ ) {
            $this->codenamesArray[$i] = $this->codenames[$i]->name;

            $this->codenamesImageArray[$i] = $this->codenames[$i]->image;
            $this->codenamesBiographyArray[$i] = $this->codenames[$i]->biography;
            
            $this->codenamesJSArray .= ',"' . $this->codenames[$i]->name . '"';
            $this->codenamesImageJSArray .= ',"' . $this->codenames[$i]->image . '"';
            $this->codenamesBiographyJSArray .= ',"' . $this->codenames[$i]->biography . '"';
        }

        $this->codenamesJSArray .= ']';
        $this->codenamesImageJSArray .= ']';
        $this->codenamesBiographyJSArray .= ']';
        
    }
    
    public function getCurrentCodename( $codename )
    {
        $found = false;
        foreach( $this->codenamesArray as $key => $cn ) {
            if( $codename == $cn ) {
                return $key + 1;
            }
        }

//        if( !$found ) {
//            return '1';
//        }
    }

    public function getRandomCodename()
    {
        $codenames = $this->codename_model->get_codenames();

        $index = mt_rand(0, count( $codenames )-1 );

        return $codenames[$index]['codename'];
    }

    public function getNextCodenameNumber( $codename )
    {
        $number = $this->codename_model->getNextNumber( $codename );
        
        // notifies admin if we are nearing the final numbers 0001 - 999
        if( $number >= CODENAME_NOTIFICATION_NUMBER ) {
            $msg = msg( 'codename-full' );
            $msg = str_replace( '[codename]', $codename, $msg );
            $msg = str_replace( '[counter]', $number, $msg );
            
            mail( ADMIN_EMAIL, 'Codename: ' . $codename . ' nearing max', $msg );
        }
        
        return $number;
    }

    public function is_valid_codename($codename)
    {
        $is_valid = false;
        if( is_array( $this->codenamesArray ) ) {
            foreach( $this->codenamesArray as $valid_codename ) {
                $valid_codename = (array)$valid_codename;

                if( $codename == $valid_codename[0] ) {
                    $is_valid = true;
                    break;
                }

            }
        }

        return $is_valid;
    }
}