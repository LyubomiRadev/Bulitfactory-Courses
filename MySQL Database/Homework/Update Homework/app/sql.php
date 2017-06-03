<?php

function select_all_from_table($db_connection,$table){
    $sql = "SELECT * FROM ".$table;


    $result = mysqli_query($db_connection, $sql);

    if($result){
        return $result;
    }
    else{
        print "Error: ".mysqli_error($sql);
    }
}

function select_item_by_id($db_connection,$table_name,$id){
    $sql="SELECT * FROM ".$table_name." WHERE id=".$id;

    $result = mysqli_query($db_connection, $sql);

    if($result){
        return $result;

    }
    else{
        print "Error: ".mysqli_error($db_connection);
    }
}

function update_info ($database_connection){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $article_id = $_POST['id'];
        $article_title = $_POST['article_title'];
        $article_content = $_POST['content'];
        $article_author = $_POST['author'];
        $article_published = $_POST['published'];

        $sql = <<<TAG
        UPDATE articles SET
        article_title = '$article_title',
        content = '$article_content',
        author = '$article_author',
        published = '$article_published'
        WHERE id='$article_id';
TAG;

        $result = mysqli_query($database_connection,$sql);

        if($result){
            header("Location: index.php");
        }
        else{
            print "Error: ".mysqli_error($sql);
        }
    }
}