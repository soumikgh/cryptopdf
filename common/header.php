<?php

// start sessions
session_start();

require 'config.php';

switch ($_SERVER['PHP_SELF']) {
    case "/register.php":
    case "/profile.php":
    case "/login.php":
        break;
    default:
        $_SESSION['last_page'] = $_SERVER['REQUEST_URI'];
}

// #### LIBRARIES #################################################
//pear libraries
//require_once('Zend/Loader.php' );
//Zend_Loader::registerAutoload(); 

require_once 'Zend/Db.php';
require_once 'Zend/Db/Adapter/Pdo/Mysql.php';
require_once 'Zend/Db/Profiler.php';
require_once 'Zend/Mail.php';

//require 'HTML/QuickForm.php';

require_once 'HTML/QuickForm2.php';
require_once 'HTML/QuickForm2/Renderer.php';

//require_once 'Zend/File/Transfer.php';
//require_once 'Zend/File/Transfer/Adapter/Http.php';
//require_once( "hybridauth/Hybrid/Auth.php" );
// #### DATABASE ##################################################
require 'database.php';

// #### LANGUAGE FILE #############################################
require 'il8n.php';

// #### CLASSES ###################################################
function __autoload($class_name)
{
//build class file name 
    if (stristr($class_name, 'model')) {
        $pieces = explode('_', $class_name);

        $classFile = 'models/model.' . strtolower(current($pieces)) . '.php';
    } else {
        $classFile = 'class.' . strtolower($class_name) . '.php';
    }

// allows for
//    if ( HTMLPurifier_Bootstrap::autoload( $class ) )
//        return true;

    if (is_file(WWWROOT_PATH . 'common/' . $classFile)) {
        require_once $classFile;
        return true;
    } else {
        exit('Class: ' . $class_name . ' Class file not found: <br /><br />' . WWWROOT_PATH . 'common/' . $classFile);
    }
}

require_once('tcpdf/config/lang/eng.php');
require_once('tcpdf/tcpdf.php');

// #### PROJECT SPECIFIC FUNCTIONS ################################
// #### COMMON FUNCTIONS ##########################################
/**
 * Displays any encountered mysql errors
 *
 * @param object $res mysql resource
 * @param string $line use php __LINE__ constant to spit out the line number
 * @param int $debuglevel set the debug level, 1 will print to screen and email, 0 will just email errors
 */
function errorCheck($res, $line = null, $file = null)
{

    $msg = '<p>Date: ' . date("Y-m-d h:i:s") . '</p>';
    $msg .= '<p>Line: ' . $line . '</p>';
    $msg .= '<p>File: ' . $file . '</p>';
    $msg .= '<p>Message: ' . $res->getMessage() . '</p>';
    $msg .= '<p>Trace: <br /><pre>' . $res->getTraceAsString() . '</pre></p>';


    mail(DEVELOPER_EMAIL, $_SERVER['HTTP_HOST'] . ' MySQL error', $msg);
    switch (MYSQL_ERR_LEVEL) {
        case "1":
            el($msg, __FUNCTION__);
            die($msg);
            break;
    }
}

/**
 * Checks for $_GET, $_POST, $_SESSION variable called action
 *
 */
function getAction()
{
    $action = '';

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    }

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    return $action;
}

/**
 * Logs error
 *
 * @param string $msg
 * @param int $line
 * @param string $file
 */
function logError($msg, $line, $file)
{
    $msg = 'LINE: ' . $line . "\r\n" . $msg;
    $msg .= 'User Name:' . $_SESSION[RC4('auth')][RC4('name')] . ' ' . $_SESSION[RC4('auth')][RC4('id')] . PHP_EOL;
    $msg .= PHP_EOL;
    $msg .= print_r($_FILES, true);

    switch (ERROR_LEVEL) {
        case "0":
            mail(ADMIN_EMAIL, strtoupper(PROJECT_FOLDER) . ': ' . $file, $msg);
            break;
        case "1":
            echo ("<div style=\"border: 2px solid;font-family: arial;font-size:10px\">FILE: " . $file . "<br />LINE: " . $line . "<br />" . $msg . "</div>");
            break;
    }
}

/**
 * Used for debugging, will display a array in a preformated way, can add optional header
 *
 * @param array $array
 * @param string $header
 */
function displayArray($array, $header = null, $returnString = false)
{
    $s = '';
    if (isset($header)) {
        $s .= "<h2>$header</h2>";
    }
    $s .= "<pre>";
    $s .= print_r($array, true);
    $s .= "</pre>";

    if ($returnString) {
        return $s;
    } else {
        echo $s;
    }
}

/**
 * Displays a string for debugging in h3 tags (easier to see) allows you to add an option header to help distinguish where you are
 *
 * @param string $string
 * @param string $header
 */
function displayString($string, $header = null, $returnString = false)
{
    $s = "<h3>" . $header . " : " . $string . "</h3>";
    if ($returnString) {
        return $s;
    } else {
        echo $s;
    }
}

/**
 * Encrypts/Decrypts data
 *
 * @param string $data
 * @return string
 */
function RC4($data)
{ //ecncrypt $data with the key in $keyfile with an rc4 algorithm
    if (strlen($data) > 0) {
        $x = '';
        $a = '';
        $j = '';
        $Zcrypt = '';
        $Zcipher = '';
        $counter = range(0, 255);

        $pwd = implode('', file(RC4_FILE));
        $pwd_length = strlen($pwd);

        for ($i = 0; $i < 255; $i++) {
            $key[$i] = ord(substr($pwd, ($i % $pwd_length) + 1, 1));
            $counter[$i] = $i;
        }
        for ($i = 0; $i < 255; $i++) {
            $x = ($x + $counter[$i] + $key[$i]) % 256;
            $temp_swap = $counter[$i];
            $counter[$i] = $counter[$x];
            $counter[$x] = $temp_swap;
        }
        for ($i = 0; $i < strlen($data); $i++) {
            $a = ($a + 1) % 256;
            $j = ($j + $counter[$a]) % 256;
            $temp = $counter[$a];
            $counter[$a] = $counter[$j];
            $counter[$j] = $temp;
            $k = $counter[(($counter[$a] + $counter[$j]) % 256)];
            $Zcipher = ord(substr($data, $i, 1)) ^ $k;
            $Zcrypt .= chr($Zcipher);
        }
        return $Zcrypt;
    }
}

/**
 * Generates a unique random number
 *
 * @param int $length length of unique number
 * @param string $pool additional characters to use in pool of characters
 * @return string
 */
function get_unique_id($length = 20, $pool = "")
{
// set pool of possible char
    if ($pool == "") {
        $pool = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $pool .= "abcdefghijklmnopqrstuvwxyz";
// $pool .= "0123456789";
    }
    // end if

    mt_srand((double)microtime() * 1000000);

    $unique_id = "";

    for ($index = 0; $index < $length; $index++) {
        $unique_id .= substr($pool, (mt_rand() % (strlen($pool))), 1);
    }
    // end for
    return ($unique_id);
}

// end get_unique_id

/**
 * Gets the IP address of the server
 *
 * @return unknown
 */
function getIP()
{
    if (validip(!empty($_SERVER['HTTP_CLIENT_IP']) && $_SERVER["HTTP_CLIENT_IP"])) {
        return $_SERVER["HTTP_CLIENT_IP"];
    }

    if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        foreach (explode(",", $_SERVER["HTTP_X_FORWARDED_FOR"]) as $ip) {
            if (validip(trim($ip))) {
                return $ip;
            }
        }
    }

    if (!empty($_SERVER["HTTP_X_FORWARDED"]) && validip($_SERVER["HTTP_X_FORWARDED"])) {
        return $_SERVER["HTTP_X_FORWARDED"];
    } elseif (!empty($_SERVER['HTTP_FORWARDED_FOR']) && validip($_SERVER["HTTP_FORWARDED_FOR"])) {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    } elseif (!empty($_SERVER["HTTP_FORWARDED"]) && validip($_SERVER["HTTP_FORWARDED"])) {
        return $_SERVER["HTTP_FORWARDED"];
    } elseif (!empty($_SERVER["HTTP_X_FORWARDED"]) && validip($_SERVER["HTTP_X_FORWARDED"])) {
        return $_SERVER["HTTP_X_FORWARDED"];
    } else {
        return $_SERVER["REMOTE_ADDR"];
    }
}

// get ip address
function validip($ip)
{
    if (!empty($ip) && ip2long($ip) != -1) {
        $reserved_ips = array(
            array('0.0.0.0', '2.255.255.255'),
            array('10.0.0.0', '10.255.255.255'),
            array('127.0.0.0', '127.255.255.255'),
            array('169.254.0.0', '169.254.255.255'),
            array('172.16.0.0', '172.31.255.255'),
            array('192.0.2.0', '192.0.2.255'),
            array('192.168.0.0', '192.168.255.255'),
            array('255.255.255.0', '255.255.255.255')
        );

        foreach ($reserved_ips as $r) {
            $min = ip2long($r[0]);
            $max = ip2long($r[1]);
            if ((ip2long($ip) >= $min) && (ip2long($ip) <= $max))
                return false;
        }
        return true;
    } else {
        return false;
    }
}

/**
 * Remove slashes recursively, from PHP.net
 *
 * @param array $value
 * @return array
 */
function stripslashes_deep($value)
{
    $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);

    return $value;
}

/**
 * Escapes data, checks if magic quotes is on or off
 *
 * @param unknown_type $data
 * @return array
 */
function escapeData($data)
{

    if (get_magic_quotes_gpc() || get_magic_quotes_runtime()) {
        $data = stripslashes_deep($data);
    }

    return $data;
}

/**
 * Compiles a html file that has php includes in it
 *
 * @param unknown_type $file
 * @return unknown
 */
function compile($file)
{
    ob_start();
    include $file;
    return ob_get_clean();
}

/**
 * This function looks at a string and truncates it to the length. This is used for making long titles fit into a specificed space
 *
 * @param str $str
 * @param integer $length
 * @param str $replaceWith
 * @return str
 */
function truncateString($str, $length, $replaceWith = ' ...')
{
    if (strlen($str) > ($length + strlen($replaceWith))) {
        $str = substr($str, 0, $length) . $replaceWith;
    }

    return $str;
}

function getUsername()
{
    return !empty($_SESSION['auth']['username']) ? $_SESSION['auth']['username'] : '';
}

function getUserId()
{
    return !empty($_SESSION['auth']['userId']) ? $_SESSION['auth']['userId'] : '';
}

function getName()
{
    return rc4($_SESSION[rc4('auth')][rc4('name')]);
}

function getCodename()
{
    return !empty($_SESSION['auth']['codename']) ? $_SESSION['auth']['codename'] : '';
}

function getEncryptedCodename()
{
    return !empty($_SESSION['auth']['encryptedCodename']) ? $_SESSION['auth']['encryptedCodename'] : '';
}

function getLoginData($type = 'flashvars')
{
    $str = '';
    switch ($type) {
        case "flashvars":
            if (getUserId()) {
                $str = '+"&username=' . htmlentities(getUsername()) . '&logout=' . LOGOUT_PAGE . '"';
            }
            break;
    }

    return $str;
}

function checkAuth($url = '')
{
    $redirect = (strlen($url) == 0 ? AUTH_FAILURE_URL : $url);

    if (strlen(rc4($_SESSION[rc4('auth')][rc4('id')])) == 0 || !is_numeric(rc4($_SESSION[rc4('auth')][rc4('id')]))) {
        header('location:' . AUTH_FAILURE_URL);
        exit;
    }
}

function deleteDir($_target)
{
//file?
    if (is_file($_target)) {
        if (is_writable($_target)) {
            if (@unlink($_target)) {
                return true;
            }
        }

        return false;
    }

//dir?
    if (is_dir($_target)) {
        if (is_writeable($_target)) {
            foreach (new DirectoryIterator($_target) as $_res) {
                if ($_res->isDot()) {
                    unset($_res);
                    continue;
                }

                if ($_res->isFile()) {
                    deleteDir($_res->getPathName());
                } elseif ($_res->isDir()) {
                    deleteDir($_res->getRealPath());
                }

                unset($_res);
            }

            if (@rmdir($_target)) {
                return true;
            }
        }

        return false;
    }
}

function jsAlert($msg)
{
    echo '<script type="text/javascript">alert( \'' . $msg . '\');</script>';
}

// check and email with dns check
function check_email($email, $check_dns = false)
{
    $isValid = true;
    $atIndex = strrpos($email, "@");
    if (is_bool($atIndex) && !$atIndex) {
        $isValid = false;
    } else {
        $domain = substr($email, $atIndex + 1);
        $local = substr($email, 0, $atIndex);
        $localLen = strlen($local);
        $domainLen = strlen($domain);
        if ($localLen < 1 || $localLen > 64) {
            // local part length exceeded
            $isValid = false;
        } else if ($domainLen < 1 || $domainLen > 255) {
            // domain part length exceeded
            $isValid = false;
        } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
            // local part starts or ends with '.'
            $isValid = false;
        } else if (preg_match('/\\.\\./', $local)) {
            // local part has two consecutive dots
            $isValid = false;
        } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
            // character not valid in domain part
            $isValid = false;
        } else if (preg_match('/\\.\\./', $domain)) {
            // domain part has two consecutive dots
            $isValid = false;
        } else if
        (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))
        ) {
            // character not valid in local part unless 
            // local part is quoted
            if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                $isValid = false;
            }
        }

        if ($check_dns) {
            if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
                // domain not found in DNS
                $isValid = false;
            }
        }
    }

    return $isValid;
}

/**
 * Credit: http://www.php.net/time
 * Calculates the difference between two time stamps
 *
 * @param timestamp $time
 * @param array $opt
 * @return str
 */
function timeDiff($time, $opt = array())
{
// The default values
    $defOptions = array(
        'to' => 0,
        'parts' => 1,
        'precision' => 'second',
        'distance' => TRUE,
        'separator' => ', '
    );
    $opt = array_merge($defOptions, $opt);
// Default to current time if no to point is given
    (!$opt['to']) && ($opt['to'] = time());
// Init an empty string
    $str = '';
// To or From computation
    $diff = ($opt['to'] > $time) ? $opt['to'] - $time : $time - $opt['to'];
// An array of label => periods of seconds;
    $periods = array(
        'decade' => 315569260,
        'year' => 31556926,
        'month' => 2629744,
        'week' => 604800,
        'day' => 86400,
        'hour' => 3600,
        'minute' => 60,
        'second' => 1
    );
// Round to precision
    if ($opt['precision'] != 'second')
        $diff = round(($diff / $periods[$opt['precision']])) * $periods[$opt['precision']];
// Report the value is 'less than 1 ' precision period away
    (0 == $diff) && ($str = 'less than 1 ' . $opt['precision']);
// Loop over each period
    foreach ($periods as $label => $value) {
// Stitch together the time difference string
        (($x = floor($diff / $value)) && $opt['parts']--) && $str .= ($str ? $opt['separator'] : '') . ($x . ' ' . $label . ($x > 1 ? 's' : ''));
// Stop processing if no more parts are going to be reported.
        if ($opt['parts'] == 0 || $label == $opt['precision'])
            break;
// Get ready for the next pass
        $diff -= $x * $value;
    }

    $opt['distance'] && $str .= ($str && $opt['to'] > $time) ? ' ago' : ' away';

    return $str;
}

/**
 * Byte converting with formated number
 * source: http://us2.php.net/manual/en/function.filesize.php
 * @param int $bytes        bytes
 * @return string
 */
function byteConvert($bytes)
{
    $b = (int)$bytes;
    $s = array('B', 'kB', 'MB', 'GB', 'TB');
    if ($b < 0) {
        return "0 " . $s[0];
    }
    $con = 1024;
    $e = (int)(log($b, $con));
    return number_format($b / pow($con, $e), 2, '.', '.') . ' ' . $s[$e];
}

/**
 * Does some simple obsfucation of the values
 * @return
 * @param object $values
 */
function passUrlValues($values)
{
    if (is_array($values)) {
        $data = base64_encode(rc4(serialize($values)));
    } else {
        $data = unserialize(rc4(base64_decode($values)));
    }

    return $data;
}

/**
 * Generates mnemoic passwords
 * source: Gary Hess http://chickencamels.poemofquotes.com/
 * @param <type> $chars
 * @param <type> $numbers
 * @return <type>
 */
function mnemonic($chars, $numbers)
{
    $letters = array(
        0 => array('q', 'w', 'r', 'g', 'f', 'd', 's', 'z', 'x', 'c', 'v'),
        1 => array('u', 'i', 'o'),
        2 => array('y', 'p', 'h', 'j', 'k', 'l', 'b', 'n', 'm'),
        3 => array('e', 'a')
    );

    $digits = array(
        0 => array('1', '2', '3', '4', '5', '6'),
        1 => array('7', '8', '9', '0')
    );

    for ($i = 0; $i < $chars; $i++) {
        $pass .= $letters[$i % 4][array_rand($letters[$i % 4])];
    }

    $dirty_words = array('bob', 'con', 'cum', 'fod', 'fuc', 'fud', 'fuk', 'gal', 'gat', 'mal', 'mam', 'mar', 'mec', 'pat', 'peg', 'per', 'pic', 'pil', 'pit', 'put', 'rab', 'tar', 'tes', 'tet', 'tol', 'vac');

    foreach ($dirty_words as $dirty_word) {
        if (strpos($pass, $dirty_word) !== false) {
            return mnemonic($chars, $numbers);
        }
    }

    if ($numbers > 0) {
        for ($i = 0; $i < $numbers; $i++) {
            $pass .= $digits[$i % 2][array_rand($digits[$i % 2])];
        }
    }

    return $pass;
}

function setMsg($text, $error)
{
// use to track if data has been escaped
    $escaped = false;

    if (!isset($_SESSION['msg'])) {
        $_SESSION['msg'] = array();
    }

    if (!isset($_SESSION['msg'][$error])) {
        $_SESSION['msg'][$error] = array();
    }

// allows you to pass in multiple errors as an array
    if (is_array($text)) {
        $escaped = true;
        $text = array_map('htmlentities', $text);
        $text = implode('<br />', $text);
    }

// escape data if needed
//    $text = ( $escaped ? $text : htmlentities( $text ) );
// looks to see if there is already an error set if there is append error
    if (!is_array($_SESSION['msg'][$error]) && strlen($_SESSION['msg'][$error]) > 0) {
        $_SESSION['msg'][$error] .= '<br />' . $text;
    } else {
        $_SESSION['msg'][$error] = $text;
    }
}

/**
 * Removes invalid file system characters
 * @return
 * @param object $string
 */
function stringSafe($string)
{
    $newString = preg_replace('/^[a-z0-9]+$/', '_', $string);

    return $newString;
}

function load_view($viewName, $data = null)
{
    if (!defined('VIEW_PATH')) {
        define('VIEW_PATH', dirname(__FILE__) . '/views/');
    }
    $fileName = $viewName . '.php';

    if (is_array($data) && count($data) > 0) {
        foreach ($data as $key => $var) {
            $$key = $var;
        }
    }

    if (is_file(VIEW_PATH . $fileName)) {
        ob_start();
        include VIEW_PATH . $fileName;
        $html = ob_get_contents();
        ob_end_clean();
    } else {
        exit('Unknown view' . VIEW_PATH . $fileName);
    }

    return $html;
}

function el($value, $str = null)
{
    $args = func_get_args();
    unset($args[0]);

    if (count($args) > 0) {
        error_log(' #### ' . implode(' - ', $args) . ' ### ' . PHP_EOL);
    }

    error_log(print_r($value, true) . PHP_EOL);
}

function vdl($value, $str = null)
{
    ob_start();
    var_dump($value);

    $value = ob_get_contents();

    el($value, $str);
}

function truncatePost($str, $start = 122, $wholeWords = true)
{
    if (strlen($str) > $start && $wholeWords) {
        while (substr($str, $start, 1) != ' ' && $start <= strlen($str)) {
            $start++;
        }

        $str = substr($str, 0, $start) . ' ...';
    } else {
        if (strlen($str) > $start) {
            $str = substr($str, 0, $start) . '...';
        }
    }

    return $str;
}

function displayKeys($clue)
{
    $string = '';
    $keyletter = $clue['4'];
    $key = $clue['3'];

    switch ($clue['2']) {
        case "Keyword":
            $string = 'Keyword = ' . $key . ', ' . PHP_EOL . 'Keyletter = ' . $keyletter;
            break;
        case "Multiplicative":
            $string = 'Key = ' . $key;
            break;
        case "Caesar":
            $string = 'Key = ' . $key;
            break;
        case "Vigenere":
            $string = 'Keyword = ' . $key;
            break;
        case "Additive":
            $string = 'Key = ' . $key;
            break;
        case "Letter-&gt;Number":

            break;
        case "Affine":
            $string = 'Multiplicative Key = ' . $key . ', ' . PHP_EOL . 'Additive Key = ' . $keyletter;
            break;
        default:
            break;
    }

    $string = ',' . PHP_EOL . $string;

    return (bool)$clue['5'] ? $string : ', Key not given';
}

function getRegistrationValues($type, $outputType = null)
{
    $registrationData = simplexml_load_file(XML_OPTIONS);

    if (!empty($registrationData->$type)) {
        $options = array();
        switch ($type) {
            case "age":
                for ($i = 0; $i < count($registrationData->$type->options); $i++) {
                    $attributes = $registrationData->$type->options[$i]->attributes();
                    $value = (string)$attributes['value'];
                    $options[$value] = $attributes['label'];
                }
                break;
            case "codenames":
                for ($i = 0; $i < count($registrationData->codenames->codename); $i++) {
                    $codename = (array)$registrationData->codenames->codename[$i];
                    $options[] = $codename['name'];
                }
                break;
            default:
                exit('invalid type: ' . $type);
        }
    } else {
        echo 'is empty';
    }

    return empty($outputType) ? $options : registrationOutput($options, $outputType);
}

function registrationOutput($datum, $outputType)
{
    $str = '';
    if (is_array($datum) || is_object($datum)) {

        switch ($outputType) {
            case "javascript":
                $str = '[';
                break;
            default:
                throw new Exception('invalid output type');
        }

        for ($i = 0; $i < count($datum); $i++) {
            switch ($outputType) {
                case "javascript":
                    $str = '\'' . $datum[$i] . '\'';
                    break;
            }
        }

        switch ($outputType) {
            case "javascript":
                $str = ']';
                break;
        }
    }

    return $str;
}

/**
 * Looks at language file and returns message from file
 * @global type $messages
 * @param string $key
 * @param type $lang
 * @return type
 * @throws Exception
 */
function msg($key, $lang = 'en')
{
    global $messages;

    if (isset($messages[$lang][$key])) {
        return $messages[$lang][$key];
    } else {
        throw new Exception('unknown message');
    }
}

/**
 * Checks to see if user is in admins table
 * @param obj $db
 * @param int $userId
 * @return boolean
 */
function is_admin($db, $userId)
{
    if (!empty($userId)) {
        $sql = "SELECT user_id FROM admins WHERE user_id = ?";

        try {
            $nUserId = $db->fetchOne($sql, array($userId));

            if ($userId == $nUserId) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            errorCheck($e, __LINE__, __FILE__);
        }
    } else {
        return false;
    }
}


function saveCurrentPage()
{
    switch ($_SERVER['PHP_SELF']) {
        case "/login.php":
        case "/register.php":
        case "/forgot.php":
        case "/groups/process.php":
        case "/games/process.php":
        case "/challenges/save.php":
            break;
        default:
            $_SESSION['return'] = $_SERVER['PHP_SELF'];

            if (!empty($_SERVER['argv']['0'])) {
                $_SESSION['return'] .= '?' . $_SERVER['argv']['0'];
            }

            break;
    }
}

function sort_url($type)
{
    $url = '?';

    if (isset($_REQUEST['p']) && is_numeric($_REQUEST['p'])) {
        $url .= 'p=' . (int)$_REQUEST['p'];
    }

    $url .= strlen($url) > 1 ? '&amp;' : '';
    if (isset($_REQUEST['dir']) && $_REQUEST['type'] == $type ) {
        $url .= 'dir=' . ( strtolower( $_REQUEST['dir'] ) == 'asc' ? 'desc' : 'asc' );
    } else {
        $url .= 'dir=asc';
    }

    $url .= strlen($url) > 0 ? '&amp;' : '';

    // validation white list is done in class.messages
    $url .= 'type=' . urlencode( $type );

    if( isset( $_REQUEST['groupId'] ) ) {
        $url .= strlen($url) > 0 ? '&amp;' : '';
        $url .= 'groupId=' . $_REQUEST['groupId'];
    }

    return $url;

}