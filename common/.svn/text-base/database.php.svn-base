<?php

// check to see if we are in local server
if ( getIP() == '127.0.0.1' || stristr( getIP(), '192.168' ) ) {
    $dsn = array(
        'phptype' => 'mysql',
        'username' => DB_DEV_USER,
        'password' => DB_DEV_PASS,
        'host' => DB_DEV_HOST,
        'dbname' => DB_DEV_NAME,
        'charset' => 'utf8'
    );
}
else {
    /**
     * Zend Style
     */
    $dsn = array(
        'phptype' => 'mysql',
        'username' => DB_LIVE_USER,
        'password' => DB_LIVE_PASS,
        'host' => DB_LIVE_HOST,
        'dbname' => DB_LIVE_NAME,
        'charset' => 'utf8'
    );
}

try {
    $db = Zend_Db::factory( 'Pdo_Mysql', $dsn );
    $db->setFetchMode( Zend_Db::FETCH_ASSOC );
}
catch ( Exception $e ) {
    errorCheck( $e, __LINE__, __FILE__ );
}