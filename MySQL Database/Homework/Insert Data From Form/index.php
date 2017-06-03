<?php

$user_name = $_POST['user_name'];
$phone_number = $_POST['phone_number'];
$user_email = $_POST['user_email'];
$favorite_brand = $_POST['favorite_brand'];
$favorite_team = $_POST['favorite_team'];
$favorite_meal = $_POST['favorite_meal'];
$favorite_City = $_POST['favorite_City'];
$favorite_season = $_POST['favorite_season'];
$error="";

include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."check_db_connection.php";
include "HTML".DIRECTORY_SEPARATOR."app.php";
include "views".DIRECTORY_SEPARATOR."form.php";

$connect_foo = check_db_connection($host,$user,$password,$database);


    $sql= <<<TAG
    INSERT INTO favorite_things(
      user_name,
      phone_number,
      user_email,
      favorite_brand,
      favorite_team,
      favorite_meal,
      favorite_City,
      favorite_season
    )
    VALUE (
    $user_name,
    $phone_number,
    $user_email,
    $favorite_brand,
    $favorite_team,
    $favorite_meal,
    $favorite_City,
    $favorite_season   
    )
TAG;

    if(mysqli_query($connect_foo,$sql)){
        echo "Data has successfully been placed in the table.";
    }
    else{
        echo "Error ".$sql."<br>".mysqli_error($connect_foo);
    }