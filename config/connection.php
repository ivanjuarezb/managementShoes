<?php
    class Connection{
        public static function connect(){
            $connect = new PDO('mysql: host=localhost; dbname=dbshoe; charset=utf8;','root','');
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        }
    }
?>