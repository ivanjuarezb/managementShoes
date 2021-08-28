<?php
    include_once 'controller/controller.php';
    include_once 'config/connection.php';

    $controller = new Controller; 

    if(!isset($_GET['method'])){
        $controller->index();
        $controller = null;
    }else{
        $action =  $_GET['method'];
        call_user_func(array($controller,$action));
        $controller = null;
        $_GET['method'] = null;
    }
?>