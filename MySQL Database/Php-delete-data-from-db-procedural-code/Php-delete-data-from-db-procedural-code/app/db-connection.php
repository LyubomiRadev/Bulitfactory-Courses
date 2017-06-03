<?php

// Създавам функция с аргументи за конекция към сървъра.
function db_connect($host, $user_name, $user_password, $database) {

    // Осъществявам връзка със сървъра.
    $connection = mysqli_connect($host, $user_name, $user_password, $database);

    // Проверявам дали последния опит за връзка към сървъра не носи грешка.
    if(mysqli_connect_errno()){
        die("Connection failed: ".mysqli_connect_error());
    }

    // Сетвам utf8 енкодинг
    mysqli_set_charset($connection, "utf8");

    // Задавам return за да може да използвам $connection извън функцията
    return $connection;

}