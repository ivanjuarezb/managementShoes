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
            $this->MODEL->insert();
            header("location: index.php");
        }
        public function delete(){
            $id = $_GET['id'];
            $nameImage = $_GET['nameImage'];
            $this->MODEL->eliminate($id,$nameImage);
            header("location:  index.php");
        }
    }
?>