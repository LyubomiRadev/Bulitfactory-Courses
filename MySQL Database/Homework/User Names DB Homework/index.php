<?php
    include "config.php";
    include "HTML Template".DIRECTORY_SEPARATOR."app.php";
    include "views".DIRECTORY_SEPARATOR."form.php";


    $new_db=$_POST['new_db_name'];

    $connection=mysqli_connect($host,$user_name, $user_pass);

    if(!$connection){
        echo "Connection error".mysqli_error();
        exit();
    }

    mysqli_set_charset($connection,"utf8");
    $sql="CREATE DATABASE ".$new_db." COLLATE utf8_general_ci";

    if(mysqli_query($connection,$sql)){
        echo "Database ".$new_db." successfully created";
    }
    // ако след if-a поставя else за грешка, винаги когато стартирам страницата за първи път ми дава грешка(защото още няма въведено име за базата данни0. Може ли ми кажете как мога да направя така че при първоначално отваряне на страницата да не ми изплюва тази грешка?
    if($new_db= true){
        exit();
    }