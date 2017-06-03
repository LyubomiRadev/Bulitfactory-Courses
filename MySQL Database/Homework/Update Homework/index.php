<?php

include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";
include "app".DIRECTORY_SEPARATOR."sql.php";

$db_connection = db_connection($host, $user, $pass, $database);

$result_from_table = select_all_from_table($db_connection,"articles");


include "layout".DIRECTORY_SEPARATOR."template.php";
include "views".DIRECTORY_SEPARATOR."article_table.php";

