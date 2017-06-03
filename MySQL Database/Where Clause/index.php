<?php


    include "app" . DIRECTORY_SEPARATOR . "config.php";
    include "app" . DIRECTORY_SEPARATOR . "db-connection.php";

    $connection_foo= database_connection($host,$user_name,$pass,$database);
    //тук WHERE оказва точно от къде да се отпечатат данни(с сл. от ред с id#10), като може да се използват OR, AND и IN()
    $sql = "SELECT * FROM articles WHERE author = 'Lyubomir Radev' ";

    //изпълнение на sql заявката
    $result = mysqli_query($connection_foo,$sql);
    //num_rows брои редовете в таблицата


    if(mysqli_num_rows($result) > 0){

        foreach ($result as $key => $columns){
            echo $columns['id']." ",
                $columns['article_title']." ",
                $columns['content']." ",
                $columns['author']." ",
                $columns['published']." "."<br>";

        }

    }
    else{
        echo "No results.";
    }
    mysqli_close($connection_foo);




