<?php


    include "app".DIRECTORY_SEPARATOR."config.php";
    include "app".DIRECTORY_SEPARATOR."db-connection.php";
    $check_conn=  db_connect($host,$user_name,$user_pass,$database);
    $sql = <<<TAG
      CREATE TABLE new_users(
      id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      user_name VARCHAR (64) NOT NULL ,
      user_email VARCHAR (64) NOT NULL ,
      user_password VARCHAR (65) NOT NULL ,
      registration_date TIMESTAMP 
    )
TAG;

    if(mysqli_query($check_conn,$sql)){
        echo "Table created successfully!";
    }
    elseif($database == true){
        echo "A table by this name already exists!";
    }
    else{
        echo mysqli_connect_error($check_conn);
    }