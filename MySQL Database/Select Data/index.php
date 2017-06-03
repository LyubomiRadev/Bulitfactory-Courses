<?php


    include "app" . DIRECTORY_SEPARATOR . "config.php";
    include "app" . DIRECTORY_SEPARATOR . "db-connection.php";

    $connection_foo= database_connection($host,$user_name,$pass,$database);
    //в променливата вписваме метода за вмъкване на инфроамция в таблицата
    $sql = "SELECT * FROM articles";

    //изпълнение на sql заявката
    $result = mysqli_query($connection_foo,$sql);
    //num_rows брои редовете в таблицата


    if(mysqli_num_rows($result) > 0){

        foreach ($result as $key => $columns){
            echo $columns['author']." ".
                $columns['content']
            ;
        }

    }
    else{
        echo "No results.";
    }
    mysqli_close($connection_foo);




