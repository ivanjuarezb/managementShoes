<?php
    class Shoe{
        public $connect;

        public function __construct(){
            try{
                $this->connect = Connection::connect();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function list (){
            try{
                $query = "SELECT * FROM shoes";
                $data  = $this->connect->prepare($query);
                $data->execute();
                return $data->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>