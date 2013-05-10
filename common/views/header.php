<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo $title ?></title>
        <meta name="title" content="<?php echo $title ?>" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="description" content="<?php echo $description ?>" />
        <style type="text/css" media="screen">
            <!--
            @import "/thickbox.css";
            @import "/styles.css";
            @import "/css/forms.css";
            -->
        </style>
        <style type="text/css" media="print">
            <!--
            @import "/styles_print.css";
            -->
        </style>
        <script language="javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        
        <script language="javascript" type="text/javascript" src="/thickbox.js"></script>
        <script language="javascript" type="text/javascript" src="/scripts.js"></script>
        <?php
        switch( $_SERVER['PHP_SELF'] ) {
            case "/groups/index.php":
                echo '<link rel="stylesheet" type="text/css" href="/css/groups.css" />';
                echo '<script language="javascript" type="text/javascript" src="/js/groups.js"></script>';
                
                break;
            case "/challenges/message_board.php":
                echo '<script language="javascript" type="text/javascript" src="/js/message_boards.js"></script>';
                break;
            case "/challenges/admin_message_board.php":
                echo '<script language="javascript" type="text/javascript" src="/js/admin_message_boards.js"></script>';
                break;
        }
        
        ?>
    </head>