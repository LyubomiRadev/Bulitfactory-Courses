<?php

// Извиквам външните файлове.
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db-connection.php";

// Асайнвам към нова променлива връзката със сървъра като тук викам функцията за конекцията с нужните аргументи.
$foo_connection = db_connect($host, $user_name, $user_password, $database);

// Създавам SQL с която заявка ще запиша информацията от полетата на формата в базата от данни.
// Във видеото вместо Some Article Heading трябва да е Some Article Text
$sql = <<<TAG
    INSERT INTO articles (
        heading,
        text,
        author
    )
    VALUE (
        'First Article Heading',
        'Some Article Text',
        'Svetolsav Toshkin'
    )
TAG;

// Изпълняваме SQL заявката.
if(mysqli_query($foo_connection, $sql)){
    print "Article created successfully";
}
else {
    print "Error: ".$sql."<br>".mysqli_error($foo_connection);
}

// Затваряме кънекцията със сървъра след, като приключи заявката.
mysqli_close($foo_connection);

/* Домашно упражнение.
 * -------------------------------------------
 * Направете форма и нека стойностите които инсъртваме в таблицата в базата от данни да идват с POST request от формата.
 * Внимавайте за типа на данните във формата.
 * Жокер нека всичко се изпълни само ако $_SERVER['REQUEST_METHOD'] == POST.
 * Не забравяйте да асайнете в началото на скрипта променливите, които ще пазят стойностите от POST request-a да са равни на NULL. След това в тялото на if-a
 * им прибавете стойностите от от POST request-a.
 * Успех
 */