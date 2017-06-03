<?php

$authors_name=NULL;
$title=NULL;
$content=NULL;
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";
include "app".DIRECTORY_SEPARATOR."sql.php";

$foo_connection= db_connection($host, $user, $password, $database);
$insert_data=insert_data($foo_connection,$authors_name,$title,$content);



include "html".DIRECTORY_SEPARATOR."template.php";
include "views".DIRECTORY_SEPARATOR."form.php";
