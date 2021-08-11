<?php
    include_once 'model/shoe.php';

    class Controller{
        public $MODEL;

        public function __construct(){
            $this->MODEL =  new Shoe;
        }

        public function index(){
            include_once 'view/home.php';
        }
    }
    
?>