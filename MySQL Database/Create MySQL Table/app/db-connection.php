<?php

    function db_connect($host,$user_name,$user_pass,$database){
        $connection = mysqli_connect($host,$user_name,$user_pass,$database);


        if(mysqli_connect_error()){
            exit("Connection failed: ".mysqli_connect_error());
        }
        mysqli_set_charset($connection, "utf8");
        return $connection;
    }



