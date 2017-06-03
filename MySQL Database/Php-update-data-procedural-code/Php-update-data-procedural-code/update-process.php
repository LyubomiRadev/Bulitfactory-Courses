<?php

// ИЗвикваме файловете съдържащи PHP логиката.
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db-connection.php";

// Извикваме функцията осъществяваща канекцията с базата от данни.
$foo_connection = db_connect($host, $user_name, $user_password, $database);

// Правим проверка дали при натискане на събмит бутона request method-а е равен на POST.
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Предаваме стойносттите от полетата на формата и ги асайнваме към променливи, които ще използваме в sql заявката.
    $article_id = $_POST['id'];
    $article_heading = $_POST['heading'];
    $article_text = $_POST['text'];
    $article_author = $_POST['author'];
    $article_published = $_POST['published'];

    // SQL заявка
    $sql = <<<TAG
        UPDATE articles SET heading='$article_heading', text='$article_text', author='$article_author',
               published='$article_published' WHERE id='$article_id'
TAG;

    // Изпълняваме SQL заявката на сървъра.
    $result = mysqli_query($foo_connection, $sql);

    // Проверяваме за изпълнението на заявката и ако е true редиректваме към началната страница. Ако е false скрипта ще върне грешка.
    if($result) {
        header("Location: index.php");
    }
    else {
        print "Error: ".mysqli_error($sql);
        //  print "Something went wrong!!! Please try again later.";
    }
}
