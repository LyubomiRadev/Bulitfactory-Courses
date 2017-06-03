<?php

include ".." . DIRECTORY_SEPARATOR . "config.php";
include ".." . DIRECTORY_SEPARATOR . "db-connection.php";

$connection_foo= database_connection($host,$user_name,$pass,$database);

$id = $_GET['trii'];


$delete_sql = "DELETE FROM articles WHERE id='$id'";

if (mysqli_query($connection_foo,$delete_sql)){
    //echo "Row deleted successfully!";
    header("Location: ../../index.php");
}
else{
    echo "Something went wrong!";
}