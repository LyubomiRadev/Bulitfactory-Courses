<?php
// ИЗвикваме файловете съдържащи PHP логиката.
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db-connection.php";
include "app".DIRECTORY_SEPARATOR."sql.php";

// Извикваме функцията осъществяваща канекцията с базата от данни.
$foo_connection = db_connect($host, $user_name, $user_password, $database);

// Извикваме функция, която ще селектира всичко от базата от данни от таблица articles
$results = select_all_from($foo_connection, "articles");

// Извикването на лейоут темплейта + всички паршъли които ще включва текущата страница се извършва веднага след приключването на PHP логиката.
include "layout".DIRECTORY_SEPARATOR."template.php";
include "views".DIRECTORY_SEPARATOR."article-table.php";


/* Домашно упражнение.
 * -------------------------------------------
 * Направете sql логиката за ъпдайте на инфорамцията да е функция и я преместете в app/sql.php.
 * Трябва да рзботи коректно.
 * Успех
 */

