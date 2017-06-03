<?php


    $user_name="";
    $user_email="";
    $user_name_error="";
    $user_email_error="";
    $user_phone_error="";

    //проверяваме дали POST метода работи
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//
//        //използваме validate_input_data за да изчистим информацията от нежелани или опасни символи, табулация и т.н.
//        $user_name = validate_input_data($_POST['user_name']);
//        $user_email = validate_input_data($_POST['user_email']);
//
//        echo $user_name." email is ".$user_email;
        $user_name= $_POST['user_name'];
        $user_email= $_POST['user_email'];
        $user_phone = $_POST['user_phone'];

        if(empty($user_name)){
            $user_name_error= "Required field!";
        }
        //проверяваме дали са използвани само букви в input полето
        elseif (!preg_match("/^[a-zA-Z]*$/", $user_name)){
            echo $user_name_error="You can use only letters Aa - Zz!";
        }
        else{
            $user_name= validate_input_data($_POST['user_name']);
        }

        if(empty($user_email)){
            $user_email_error="Please fill in your email!";
        }
        //проверяваме дали email синтаксиса е правилен
        elseif (filter_var($user_email, FILTER_VALIDATE_EMAIL) === FALSE){
            echo $user_email_error = "Use only letters, numbers, @ and '.' !";
        }
        else{
            $user_email= validate_input_data($_POST['user_email']);
        }

        if(empty($user_phone)){
            $user_phone_error="Please enter your phone number!";
        }
        //проверяваме дали в input полето имам въведени само цифри
        elseif (!preg_match("/^[0-9]*$/", $user_phone)){
            echo $user_phone_error = "You can use only numbers and +";
        }
        else{
            $user_phone = $_POST['user_phone'];
        }
    }

    //функция която премахва всички опасни символи

    function validate_input_data($data){

        //премахване на интервали, табулации и знаци за нов ред от началото и края на въведената информация
        $data = trim($data);
        //метод който премахва наклонени черти които служат за разделител на директории при OS
        $data = stripcslashes($data);
        //превръща всички опасни HTML символи в безопасни такива
        $data  = htmlspecialchars($data);
        return $data;
    }

    include "Layout".DIRECTORY_SEPARATOR."template.php";
    include "views".DIRECTORY_SEPARATOR."sign-in.php";

