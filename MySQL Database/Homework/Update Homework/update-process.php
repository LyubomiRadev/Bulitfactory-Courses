<?php

include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";
include "app".DIRECTORY_SEPARATOR."sql.php";

$foo_connection = db_connection($host, $user, $pass, $database);
$update_data = update_info($foo_connection);



