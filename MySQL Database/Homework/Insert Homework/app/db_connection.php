<?php


function db_connection($host, $user, $password, $database){
    $connection= mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        print mysqli_connect_error();
    }
    else{
        print "DB S I";
    }
    return $connection;
}