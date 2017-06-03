<?php

include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";
include "app".DIRECTORY_SEPARATOR."sql.php";

$db_connection = db_connection($host, $user, $pass, $database);

$id =  $_GET['id'];
$get_item_by_id= select_item_by_id($db_connection,"articles", $id);
include "layout".DIRECTORY_SEPARATOR."template.php";
include "views".DIRECTORY_SEPARATOR."update-form.php";