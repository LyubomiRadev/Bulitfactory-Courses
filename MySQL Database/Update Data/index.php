<?php

    include "app".DIRECTORY_SEPARATOR."config.php";
    include "app".DIRECTORY_SEPARATOR."db-connection.php";
    include "app".DIRECTORY_SEPARATOR."sql.php";

    $foo_connection =  mysqli_connect($host, $user_name, $password, $database);
    $results = select_all($foo_connection,"articles");
    $update_info= update_data($foo_connection);



include "layout".DIRECTORY_SEPARATOR."template.php";
    include "views".DIRECTORY_SEPARATOR."article_table.php";