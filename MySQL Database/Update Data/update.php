<?php


    include "app".DIRECTORY_SEPARATOR."config.php";
    include "app".DIRECTORY_SEPARATOR."db-connection.php";
    include "app".DIRECTORY_SEPARATOR."sql.php";

    $foo_connection =  mysqli_connect($host, $user_name, $password, $database);

    $id = $_GET['id'];
    $result = select_item_by_id("articles", $id, $foo_connection);

    include "layout".DIRECTORY_SEPARATOR."template.php";
    include "views".DIRECTORY_SEPARATOR."update_for.php";
