<?php

include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db-connection.php";

$foo_connection =  mysqli_connect($host, $user_name, $password, $database);

