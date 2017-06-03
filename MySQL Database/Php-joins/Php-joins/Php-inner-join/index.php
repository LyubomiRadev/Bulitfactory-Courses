<?php

// Извиквам външните файлове.
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db-connection.php";

// Асайнвам към нова променлива връзката със сървъра като тук викам функцията за конекцията с нужните аргументи.
$foo_connection = db_connect($host, $user_name, $user_password, $database);

// SQL INNER JOIN заявка
$sql = <<<TAG
    SELECT authors.name as author_name,
           articles.title as article_title,
           articles.text as article_text,
           articles.author_id
    FROM authors
    INNER JOIN articles
    ON authors.id = articles.author_id
TAG;

// Изпълняваме SQL заявката на сървъра
$result = mysqli_query($foo_connection, $sql);

// Проверяваме изпълнена ли е заявката коректно.
if($result) {

    // Обхождаме обекта $result с foreach loop
    foreach($result as $key => $item_data){

        print $item_data['author_name']. " - " . $item_data['article_title'] . " - " . $item_data['article_text'] ."<br>";

    }

}
else {
    print "Something went wrong! ".mysqli_errno($sql);
}

// Затваряме връзката със сървъра.
mysqli_close($foo_connection);
