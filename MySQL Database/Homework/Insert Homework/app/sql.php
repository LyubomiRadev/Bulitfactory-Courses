<?php

function insert_data($foo_connection,$authors_name,$title,$content){


    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['submit'])){

            $authors_name=$_POST['authors_name'];
            $title=$_POST['title'];
            $content=$_POST['content'];

            $sql=<<<TAG
                INSERT INTO articles(author,article_title, content)
                VALUE(
                '$authors_name',
                '$title',
                '$content'
                )
TAG;

            if(mysqli_query($foo_connection,$sql)){
                return $sql;
            }
            else{
                print "Error: ".$sql."<br>".mysqli_error($foo_connection);
            }


        }
    }
}

