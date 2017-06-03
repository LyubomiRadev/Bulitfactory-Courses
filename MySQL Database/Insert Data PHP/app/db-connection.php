<?php

    function database_connection($host,$user_name,$pass,$database){
        $connect = mysqli_connect($host,$user_name,$pass,$database);

        if(mysqli_connect_error()){
            exit("Connection error ".mysqli_connect_error());
        }
        else{
            echo "Success"."<br>";
        }
        mysqli_set_charset($connect,"utf8");

        return $connect;
    }