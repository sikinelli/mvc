<?php

    spl_autoload_register(function($class){
    include_once "system/libs/".$class.".php"; 
    
    });

    include_once "app/config/config.php";


    $url = isset($_GET['url']) ? $_GET['url'] : NULL; 

    if ($url != NULL) {
        
        $url = rtrim($url, '/');
        $url = explode("/", filter_var($url, FILTER_SANITIZE_URL));

    } else {
        unset($url);
    }        
    
    $functionName = $url[1];

    if (isset($url[0])) {
        include 'app/controllers/'.$url[0].'.php'; 
        $ctlr = new $url[0](); 
        
    if (isset($url[2])) {
        $ctlr->$functionName($url[2]);
    } else {
        
        if (isset($functionName)) {
            $ctlr->$functionName();
        } else {
            
        }
    }
} 
    else { 
        include 'app/controllers/Login.php';
        $ctlr = new Login();
        $ctlr->login();
        
       
    }        



