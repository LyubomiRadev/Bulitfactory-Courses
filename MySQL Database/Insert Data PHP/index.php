<?php


    include "app" . DIRECTORY_SEPARATOR . "config.php";
    include "app" . DIRECTORY_SEPARATOR . "db-connection.php";

    $connection_foo= database_connection($host,$user_name,$pass,$database);
    //в променливата вписваме метода за вмъкване на инфроамция в таблицата
    $sql = <<<TAG
        INSERT INTO statii(
        authros_name,
        title,
        content
        
        )
        VALUE(
        'Lyubomir Radev',
        'My first Title',
        'Some text'
        )

  
TAG;

        if(mysqli_query($connection_foo,$sql)){
            echo "Data inserted successfully!";
        }
        else{
            //тук правим проверка за грешка - или в заявката($sql) или във връзката($connection_foo)
            echo "Error".$sql."<br>".mysqli_error($connection_foo);
        }



