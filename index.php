<?php
    include_once 'controller/controller.php';
    include_once 'config/connection.php';

    $Controller = new Controller; 

    if(!isset($_REQUEST['c'])){
        $Controller->index();
    }else{
        $action =  $_REQUEST['method'];
        call_user_func(array($Controller,$action));
    }
?>