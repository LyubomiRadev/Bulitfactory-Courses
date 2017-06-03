<?php

// Инклудваме config.php
include "config.php";

// Създаваме връзка със сървъра
$connection = mysqli_connect($host, $user_name, $user_password);

// Тестваме има ли осъществена връзка
if(mysqli_connect_errno()){
    echo "Connection failed".mysqli_connect_error();
    exit();
}

// Определяме вида на енкодинга при комуникацията със сървъра
mysqli_set_charset($connection, "utf8");

// Задаваме SQL команда за създаване на база от данни с колация utf8_general_ci
$sql = "CREATE DATABASE our_new_database COLLATE utf8_general_ci";

// Стартираме команда за изпълнение на кода на сървъра и едновременно проверяваме дали е изпълнена коректно
if(mysqli_query($connection, $sql)){
    echo "Database successfully created";
}
else {
    echo "Something went wrong".mysqli_error($connection);
}

// Затваряме конекцията към сървъра
mysqli_close($connection);

// ПС. Ако сте създали базата от данни успешно и презаредите страницата на браузъра ще ви върне отговор, че такава база от данни вече съществува.

/*
 * Домашно упражнение:
 * Създайте html форма с едно input поле в което потребител ще трябва да напише името на базата данни, която ще иска да се създаде.
 * Нека да има събмит бутон и при събмитване на формата POST request да предаде стойноста на суперглобалната променлива $_POST[].
 * Нека променлива наименована по ваш избор да запази тази стойност и да я предаде като стойност с конкатенация към самата команда за създаване на базата данни.
 * Направете проверка и дали наименованието на базата данни вече не е било създадено. Тоест дали съществува вече такава база от данни и ако съществува да не изпълни кода след конекцията към сървъра.
 * Успех
 */