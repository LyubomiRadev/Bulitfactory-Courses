<?php

 function db_connection($host, $user, $pass, $database){
     $connection = mysqli_connect($host, $user, $pass, $database);

     if(mysqli_connect_errno()){
         die( "Error: ".mysqli_connect_errno());
     }



     else{
         return $connection;
     }

     mysqli_set_charset($connection,"utf8");
 }