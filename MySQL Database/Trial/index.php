<?php

    $error = "";
    $player_name = $_POST['player_name'];
    $player_team = $_POST['player_team'];
    $player_shirt_number = $_POST['player_shirt_number'];
    $player_goals = $_POST['player_goals'];
    $table_name= $_POST['table_name'];


include "app".DIRECTORY_SEPARATOR."connect_to_db.php";
include "app".DIRECTORY_SEPARATOR."lang.php";


    $connect = database_connection($host, $user, $password, $database);




    $sql_create_table = <<<TAG
    
        CREATE TABLE $table_name(
        
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        player_name VARCHAR (64) NOT NULL ,
        player_team VARCHAR  (64) NOT NULL,
        player_shirt_number INT (2) NOT NULL,
        player_goals INT (11) NOT NULL
        )
TAG;

    if(mysqli_query($connect,$sql_create_table)){
        echo "Table successfully created";
    }
    else{
        echo "The problem is: ".mysqli_error($connect)."<br>";
    }

    $sql_add_content_to_table = <<<TAG
    
        INSERT INTO favorite_players(
        player_name,
        player_team,
        player_shirt_number,
        player_goals
        )
        VALUE (
        $player_name,
        $player_team,
        $player_shirt_number,
        $player_goals
        )

TAG;

    if(mysqli_query($connect,$sql_add_content_to_table)){
        echo "Content added to table!";
    }
    else{
        echo "Error: ".mysqli_error($connect);
    }


include "html".DIRECTORY_SEPARATOR."template.php";
include "html".DIRECTORY_SEPARATOR."db_form.php";
