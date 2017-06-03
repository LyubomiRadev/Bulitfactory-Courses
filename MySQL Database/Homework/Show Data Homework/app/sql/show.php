<?php

    include "..".DIRECTORY_SEPARATOR."config.php";
    include "..".DIRECTORY_SEPARATOR."db_connection.php";

    $connection_foo = mysqli_connect($host, $user_name, $password, $database);

    $selected = $_GET['id'];

    echo $selected;

    $choice_sql = "SELECT * FROM articles WHERE id = '$selected' ";
    $result = mysqli_query($connection_foo,$choice_sql);

    if(mysqli_num_rows($result) > 0){
        foreach ($result as $key => $cols){
            print $cols['id']." ".
                 $cols['article_title']." ".
                 $cols['content']." ".
                 $cols['author']." ".
                 $cols['published']." "."<br>";
        }


    }
