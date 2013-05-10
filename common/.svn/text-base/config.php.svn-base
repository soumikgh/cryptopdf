<?php

define( 'LOGIN_PAGE', '/register.php' );
define( 'LOGOUT_PAGE', "/register.php?action=logout" );
define( 'WEB_NAME', 'CHANGE' );
define( 'FROM_NAME', 'CHANGE' );
define( 'FROM_EMAIL', 'CHANGE' );
define( 'CODENAME_NOTIFICATION_NUMBER', 980 );

// sets error level 0 for product 1 for development
define( 'ERROR_LEVEL', '1' );
define( 'LOG_ERRORS', true );

define( 'MAIN_BOARD_ID', '0' );

define( 'MSG_PER_BOARD', '25' );

// adjust time zone to east coast
putenv("TZ=America/New_York");

// admin email address
define( 'ADMIN_EMAIL', 'msteudel@gmail.com' );
define( 'SUPPORT_EMAIL', 'msteudel@gmail.com' );

define( 'DEVELOPER_EMAIL', 'msteudel@gmail.com' );

/**
 * 
 * ** SERVER OPTIONS -- DO NOT EDIT BELOW HERE **
 * 
**/
// turn off magic quotes
ini_set( 'magic_quotes_gpc', 'off');

define( 'BASE_PATH', str_replace( '\\', '/', dirname( dirname( dirname(__FILE__ ) ) ) . '/' ) );
define( 'WWWROOT_PATH', str_replace( '\\', '/', dirname( dirname( __FILE__ ) ) ) . '/');
define( 'SITE_URL', $_SERVER['HTTP_HOST'] . '/' );

define( 'XML_OPTIONS', 'common/registration_options.xml' );
define( 'MESSAGE_OPTIONS', WWWROOT_PATH . 'common/challenge_options.xml' );

// set include path to include local copy of Zend/pear/HTMLPurifier
ini_set( 'include_path', ini_get( 'include_path' ) . PATH_SEPARATOR . BASE_PATH . "Zend/library" );
ini_set( 'include_path', ini_get( 'include_path' ) . PATH_SEPARATOR . BASE_PATH . "Zend/library/pear" );
ini_set( 'include_path', ini_get( 'include_path' ) . PATH_SEPARATOR . BASE_PATH . "Zend/library/hybridauth" );

define( 'HYBRIDAUTH_CONFIG', BASE_PATH . 'Zend/library/hybridauth/hybridauth/config.php' );

// display errors while in development
ini_set('display_errors', ( ERROR_LEVEL > 0 ? 'on' : 'off' ) );

// set upload file sizes to bigger
ini_set('post_max_size', '10M');
ini_set('upload_max_filesize', '10M');

// encryption file
define( 'RC4_FILE', BASE_PATH . 'RC4/rc4.php');

// include directory

// database constants
define( 'MYSQL_ERR_LEVEL', ERROR_LEVEL );

define( 'DB_DEV_HOST', 'localhost' );
define( 'DB_DEV_USER', 'cryptoclub' );
define( 'DB_DEV_NAME', 'cryptoclub' );
define( 'DB_DEV_PASS', 'XIcimwhE89hodN' );

define( 'DB_LIVE_HOST', 'localhost');
define( 'DB_LIVE_USER', 'cryptocl_club' );
define( 'DB_LIVE_NAME', 'cryptocl_cryptoclub' );
define( 'DB_LIVE_PASS', 's5hCCnDaspKdL74U' );