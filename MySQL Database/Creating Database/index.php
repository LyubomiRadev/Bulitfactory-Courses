<?php


    include "config.php";
    $connection= mysqli_connect($host,$user_name,$user_pass);

    if(mysqli_connect_errno()){
        echo "Connection error. ".mysqli_connect_error();
        //спира изпълнението на кода
        exit();
    }

    mysqli_set_charset($connection,"utf8");
    //променлива, която държи кода за създаване на нова база данни
    $sql  = "CREATE DATABASE new_database COLLATE utf8_general_ci";
    //метода mysqli_query осъществява заявката на сървъра- изисква първо свързване към сървъра, а след това изпълнява sql заявката
    if(mysqli_query($connection,$sql)){
        echo "Database successfully created";
    }
    else{
        echo "Something went wrong.".mysqli_error($connection);
    }

    //спира връзката към сървъра

    mysqli_close($connection);