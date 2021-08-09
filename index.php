<?php
    include_once 'controller/controller.php';

    
    $Controller = new Controller; 

    if(!isset($_REQUEST['c'])){
        $Controller->index();
    }else{
        $action =  $_REQUEST['c'];
    }
?>