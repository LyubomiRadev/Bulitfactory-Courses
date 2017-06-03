<?php

 $user_name= "";
 $error="";

 function validate_input($data){

     $data= stripcslashes($data);
     $data = trim($data);
     $data= htmlspecialchars($data);

     return $data;

 }

 if($_SERVER['REQUEST_METHOD'] ==  'POST'){

     $user_name = $_POST['user_name'];
     if(empty($user_name)){
          $error = "Please fill in your name!";
     }
     elseif (!preg_match('/^[a-zA-Z\p{Cyrillic}]*$/u', $user_name)){
          $error = "You can use only Latin and Cyrillic letters!";
     }
     else{
         $user_name=validate_input($_POST['user_name']);
     }
 }


 include "layout".DIRECTORY_SEPARATOR."template.html";
 include "views".DIRECTORY_SEPARATOR."sign-up-form.php";