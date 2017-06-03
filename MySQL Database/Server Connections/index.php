<?php

    //препоръчително е паролите и потребителите да бъдат изнесени в отделен файл като мярка за сигурност
    include "config.php";
    //очаква три параметъра - hostname,user name и user password
    $connection = mysqli_connect($host_name,$user_name,$user_pass);

    if($connection){
        echo "You are successfully connected.";
    }
    else{
        //die прави така че приложението да умре и да поакже съобщение за грешка без да продължава да изпълнява кода надолу
       die("Error in connection.".mysqli_connect_error()) ;
    }