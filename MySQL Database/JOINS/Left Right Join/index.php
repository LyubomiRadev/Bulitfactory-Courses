<?php


    include "app".DIRECTORY_SEPARATOR."config.php";
    include "app".DIRECTORY_SEPARATOR."db_connect.php";

    $connection = check_connection($hostname, $user_name, $password, $database);
    //LEFT JOIN дава като отговор дори и  редове на които няма съвпадение(в зависимост от структората в таблицата) !!!
    //тук AS е метод, който ни дава възможност да именуваме отделно името на колоната. Това е много полезно в случаи когато имаме две колони с еднакви имена
    $sql_innerj = <<<TAG
        
    SELECT authors.name as ime_na_avtora,
          articles.title as article_title,
          articles.text as article_text,
          articles.author_id
    FROM authors
    LEFT JOIN articles
    ON authors.id = articles.author_id
    
TAG;

    $result = mysqli_query($connection,$sql_innerj);

    if($result){

        foreach ($result as $key => $item){
            print $item['ime_na_avtora']." - ".$item['article_title']." - ".$item['article_text']."<br>";
        }
    }
    else{
        print "Error: ".mysqli_connect_error($sql_innerj);
    }


    mysqli_close($connection);