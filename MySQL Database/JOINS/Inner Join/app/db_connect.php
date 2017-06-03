<?php


    function check_connection($host, $user_name, $password, $database){
        $connect = mysqli_connect($host, $user_name,$password, $database);

        if(mysqli_connect_error()){
            print "Error: ".mysqli_connect_error();
        }

        return $connect;
    }