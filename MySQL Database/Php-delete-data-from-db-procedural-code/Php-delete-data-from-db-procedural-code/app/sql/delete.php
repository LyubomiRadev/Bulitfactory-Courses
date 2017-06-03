<?php
// Извиквам външните файлове.
include "..".DIRECTORY_SEPARATOR."config.php";
include "..".DIRECTORY_SEPARATOR."db-connection.php";

// Асайнвам към нова променлива връзката със сървъра като тук викам функцията за конекцията с нужните аргументи.
$foo_connection = db_connect($host, $user_name, $user_password, $database);

// Взимаме id ключа с глобалната променлива $_GET[]
$id = $_GET['id'];

// SQL заявка за изтриване на реда по подаваното $id.
$sql = "DELETE FROM articles WHERE id='$id'";

// Изпълнение на SQL заявката
if(mysqli_query($foo_connection, $sql)){
//    print "Row delete successfully";
    header("Location: ../../index.php");
}
else {
    print "Something went wrong";
}