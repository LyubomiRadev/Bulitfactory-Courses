<?php

function db_connection($host, $user,$password, $database){
    $connect = mysqli_connect($host, $user,$password, $database);

    if(mysqli_connect_error()){
        print "Error: ".mysqli_connect_error();
    }
    else{
        print "DB successfully connected";
    }
    return $connect;
    mysqli_set_charset($connect,"utf8");
}