<?php


    include "config.php";
    include "HTML".DIRECTORY_SEPARATOR."template.html";
    include "HTML".DIRECTORY_SEPARATOR."form.php";

    $connect = mysqli_connect($host,$user_name,$password,$database_name);


    if(isset($_POST['submit'])){
        $new_database = $_POST['new_db'];
        if(mysqli_connect_error()){
            echo "Error: ".mysqli_connect_error();
            exit();
        }

        mysqli_set_charset($connect,"utf8");
        $sql = "CREATE DATABASE ".$new_database." COLLATE utf8_general_ci";


        if(mysqli_query($connect,$sql)){
            echo "Database successfully added.";
        }
        elseif($new_database == true){
            echo "A database by this name already exists. Please create a new name.";
            exit();
        }
        else{
            echo "Error: ".mysqli_error($connect);
        }
    }


