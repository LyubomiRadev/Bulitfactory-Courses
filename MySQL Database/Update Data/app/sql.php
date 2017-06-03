<?php


function select_all($db_connection,$table_name){
    global $results;

    $sql = "SELECT * FROM ".$table_name;
        $results = mysqli_query($db_connection, $sql);

        if($results){
            return $results;
        }
        else{
            echo "Error: ".mysqli_error($sql);
        }
    }


    function select_item_by_id($table_name, $id, $db_connection){
        $sql = "SELECT * FROM ".$table_name." WHERE id=".$id;
        $result = mysqli_query($db_connection,$sql);

        if($result){
            return $result;
        }
        else{
            echo "Error: ".mysqli_error($db_connection);
        }
    }

    function update_data($db_connection){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $article_id = $_POST['id'];
            $article_title = $_POST['article_title'];
            $article_content = $_POST['content'];
            $article_author = $_POST['author'];
            $article_publishing = $_POST['published'];

            $sql = <<<TAG

    UPDATE articles SET 
    article_title='$article_title',
    content='$article_content',
    author = '$article_author',
    published = '$article_publishing'
    WHERE id = '$article_id'
TAG;

            $result = mysqli_query($db_connection,$sql);

            if($result){
                header("Location: index.php");
            }
            else{
                print "Error: ".mysqli_error($sql);
            }
        }
    }