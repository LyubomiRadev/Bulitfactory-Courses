<?php

    include "config.php";


    $connect = mysqli_connect($host, $user_name, $password);

    if(mysqli_connect_error()){

    print "Error: ".mysqli_connect_error()."<br>";
    exit();
}

    $sql_create_db = "CREATE DATABASE bulitfactory_course COLLATE utf8_general_ci";

    mysqli_set_charset($connect,"utf8");

    if(mysqli_query($connect,$sql_create_db)){
        print "Database successfully created!"."<br>";
    }
    elseif($database ==  true){
        print "Database already exists!"."<br>";
    }
    else{
        print "Error: ".mysqli_query($connect, $sql_create_db);
    }

    function check_conn($host, $user_name, $password, $database){
        $connection = mysqli_connect($host, $user_name, $password, $database);

        if(mysqli_connect_error()){
            exit("Error: ".mysqli_connect_error()."<br>") ;
        }
        return $connection;
    }
    $check_connection = check_conn($host, $user_name, $password, $database);
    $sql_create_table = <<<TAG
        CREATE TABLE articles(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        article_heading VARCHAR(64) NOT NULL,
        content VARCHAR(500) NOT NULL,
        author VARCHAR(64) NOT NULL,
        published TIMESTAMP 
        )
TAG;

    if(mysqli_query($check_connection,$sql_create_table)){
        print "Table successfully added!"."<br>";
    }
    else{
        print "Error: ".mysqli_connect_error($connect)."<br>";
    }


    $sql_insert_data = <<<TAG
    INSERT INTO articles(
      article_heading,
      content,
      author
    )
    VALUE(
    'Favorite Book',
    'Silmarilion',
    'JRR Tolkin'
    )
TAG;

    if(mysqli_query($check_connection,$sql_insert_data)){
        print "Data successfully inserted into table!";
    }
    else{
        print "Error: ".$sql_insert_data;
    }
