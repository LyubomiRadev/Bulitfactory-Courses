<?php

    function database_connection($host, $user, $password, $database){
        $connection = mysqli_connect($host, $user, $password, $database);

        if(mysqli_connect_error()){
            echo "THe problem is: ".mysqli_connect_error();
        }
        else{
            echo "Database successfully connected."."<br>";
        }
        return $connection;
        }