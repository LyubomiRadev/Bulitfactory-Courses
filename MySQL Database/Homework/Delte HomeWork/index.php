<?php

include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connect.php";

$foo_connection = db_connection($host, $user, $password, $database);

$sql="SELECT * FROM statii";

$result=mysqli_query($foo_connection,$sql);

if(mysqli_num_rows($result)> 0){
    print
    "<table border='1px'>
        <tr>
        <td>Article ID</td>
        <td>Article Author</td>
        <td>Article Title</td>
        <td>Article Text</td>
        <td>Published</td>
        <td>Delete Article</td>
        </tr>    
    ";
    foreach ($result as $key => $article_item){
        print
        "<tr>".
        "<td>".$article_item['id']."</td>".
        "<td>".$article_item['authros_name']."</td>".
        "<td>".$article_item['title']."</td>".
        "<td>".$article_item['content']."</td>".
        "<td>".$article_item['published_at']."</td>".
        "<td><a href='app/show.php?show=".$article_item['id']."'>Show</a></td>".
        "</tr>";
    }
    print "</table>";
}
else{
    print "No result";
}