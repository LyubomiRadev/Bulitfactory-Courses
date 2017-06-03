<?php

    function check_con ($host, $user_name, $password, $database){
        $connect = mysqli_connect($host, $user_name,$password, $database);

        if(mysqli_connect_error()){
            echo "Error: ".mysqli_connect_error();
        }
        return $connect;
    }