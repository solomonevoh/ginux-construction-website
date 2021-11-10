<?php
session_start();
$GLOBALS['config'] = array(
  'mysql' => array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'db' => 'ginux'
    ),
'session' => array(
  'session_name' => 'user',
  'token_name' => 'token'
  ),
);


    //App Root
    define('APPROOT', dirname(dirname(__FILE__)));

    //Url root
    // define('URLROOT', 'http://localhost/ginux');
    define('URLROOT', 'https://ginux.ca/');

    define('SITENAME', 'Ginux Construction');

    spl_autoload_register(function ($class) {
        if (preg_match('/\A\w+\z/', $class)) {
            require_once APPROOT.'/classes/' .$class. '.class.php';
        }

        // //Load config file
        // require_once APPROOT.'/config/config.php';

        //Load libraries
        require_once APPROOT.'/libraries/Controller.php';
    });
