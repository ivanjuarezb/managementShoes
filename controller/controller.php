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

        public function create(){
            include_once 'view/create.php';
        }

        public function save(){
            
        }
    }
?>