<?php

include "config.php";
include "db_connect.php";

$foo_connection = db_connection($host, $user, $password, $database);

$delete_by_id = $_GET['delete'];

$delete_sql="DELETE FROM statii WHERE id=".$delete_by_id;

if(mysqli_query($foo_connection,$delete_sql)){
    header("../index.php");
}
else{
    print "Something went wrong";
}