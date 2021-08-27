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

        public function insert(){
            $name   = $_POST['name'];
            $brand  = $_POST['brand'];
            $gender = $_POST['gender'];
            $style  = $_POST['style'];
            $color  = $_POST['color'];
            $size   = $_POST['size'];
            $units  = $_POST['units'];
            $price  = $_POST['price'];
            $date   = $_POST['date'];

            $nameImage  = $_FILES['image']['name'];
            $route       = $_FILES['image']['tmp_name'];
            $destination = 'resources/images/'.$nameImage;

            if(move_uploaded_file($route,$destination)){
                try{
                    $query = "INSERT INTO shoes (name,brand,gender,style,color,size,units,price,datetime,image) VALUES ('$name','$brand','$gender','$style','$color','$size','$units','$price','$date','$nameImage')"; 
                    $data = $this->connect->prepare($query);
                    $data->execute();
                 }catch(Exception $e){
                     die($e->getMessage());
                 }
            }else{
                echo 'imagen existe';
            }
        }
    }
?>