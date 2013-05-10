<?php

class Error {
    
    private $db;
    public $msg;
    public $success;
    
    function __construct( $db, $msg, $success, $file = null, $line = null )
    {
        $this->db = $db;
        $this->msg = $msg;
        $this->success = (bool)$success;
        
        if( !$this->success ) {
            el( $this->msg, $file, $line );
        }
    }
}