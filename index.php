<?php

require_once "functions.php";
require_once "session.php";
require_once "libs/Smarty.class.php";

$smarty = new Smarty();
$smarty->setTemplateDir( 'templates' );

$action = ltrim( $_SERVER['REQUEST_URI'], '/' ) ?? 'index';

switch( $action )
{
    case "login":
        if( $_SERVER['REQUEST_METHOD'] === 'GET' )
        {
            getLoginView();
        }
        else
        {
            $email    = $_POST['email'];
            $password = $_POST['password'];
            loginUser( $email, $password );
        }
        break;
    case "register":
        if( $_SERVER['REQUEST_METHOD'] === 'GET' )
        {
            getRegisterView();
        }
        else
        {
            $name     = $_POST['name'];
            $email    = $_POST['email'];
            $gender   = $_POST['gender'];
            $password = $_POST['password'];
            createUser( $name, $email, $gender, $password );
        }
        break;
//    case 'session':
//        print_r( $_SESSION );
//        break;
//    case "logout":
//        session_destroy();
//        header( "Location: /" );
//        break;
    case "index":
    default:
        getDeafaultPage();
}





