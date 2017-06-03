<?php


    function check_db_connection($host,$user,$password,$database){
        $connect = mysqli_connect($host,$user,$password,$database);
        if (mysqli_connect_error()){
            exit("Error:"."<br>".mysqli_connect_error()) ;
        }
        else{
            echo "Database connected."."<br>";
        }
        mysqli_set_charset($connect,"utf8");
        return $connect;
    }