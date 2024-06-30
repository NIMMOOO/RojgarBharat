<?php

if(function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
}

//this init file initialises everithing 

session_start();                                                     //to start user session

$GLOBALS['config'] = array(
    'mysql' => array(                                                //mysql config
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'rojgar bharat'
    ),
    'remember' => array(                                            //remember me config
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800,

    ),
    'session' => array(                                                //session config
        'session_name' => 'user',
        'session_type' => 'memberType'
    ),
    'serverIP' => '127.0.0.1'

    );

    spl_autoload_register(function($class)
    {                                /*fastest method for autoloading the classes */
        if($class != 'Redis')
        {
            require_once(dirname(__DIR__).'/classes/'.$class.'.php');
        }
        
    });

    ?>