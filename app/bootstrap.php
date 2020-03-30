<?php

#Config file
require_once __DIR__ . '/config/config.php'; 

#Autoload our core libraries
spl_autoload_register(function($className){
    if(file_exists(__DIR__ . '/libraries/' . $className . '.php')){
        require_once __DIR__ . '/libraries/' . $className . '.php';
    }else{
        echo('<strong>ClassNotFoundException: file with that class not found buddy<strong>');
        return false;
    }
});