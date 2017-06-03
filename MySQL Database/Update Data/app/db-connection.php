<?php

    function database_connection($host, $user_name, $password, $database){
        $connection = mysqli_connect($host, $user_name, $password, $database);

        if(mysqli_connect_error()){
            echo "THe problem is: ".mysqli_connect_error();
        }
        else{
            echo "Database successfully connected."."<br>";
        }
        return $connection;
        }