<?php
// ИЗвикваме файловете съдържащи PHP логиката.
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db-connection.php";
include "app".DIRECTORY_SEPARATOR."sql.php";

// Извикваме функцията осъществяваща канекцията с базата от данни.
$foo_connection = db_connect($host, $user_name, $user_password, $database);

// Със суперглобалната променлива $_GET взимаме id стойността от URL адреса.
$id = $_GET['id'];

// SQL заявка с която отсяваме селект заявката да селектира само този ред чието id отговаря на id параметъра, който взимаме от URL адреса.
$result = get_item_by_id("articles", $id, $foo_connection);

// Извикването на лейоут темплейта + всички паршъли които ще включва текущата страница се извършва веднага след приключването на PHP логиката.
include "layout".DIRECTORY_SEPARATOR."template.php";
include "views".DIRECTORY_SEPARATOR."update-form.php";