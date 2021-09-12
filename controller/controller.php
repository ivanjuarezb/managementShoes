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
            if(isset($_GET['update']) && $_GET['update'] == true){
                $this->MODEL->update($_GET['id']);
                header("location: index.php");
            }else{
                $this->MODEL->insert();
                header("location: index.php");
            }
            
        }
        
        public function delete(){
            $id = $_GET['id'];
            $nameImage = $_GET['nameImage'];
            $this->MODEL->eliminate($id,$nameImage);
            header("location:  index.php");
        }

        public function update(){
            $id = $_GET['id'];
            $shoe = $this->MODEL->getShoe($id); 
            include_once 'view/update.php';
        }
    }
?>