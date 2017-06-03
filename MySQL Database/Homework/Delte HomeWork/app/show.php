<?php

include "config.php";
include "db_connect.php";

$foo_connection = db_connection($host, $user, $password, $database);
$show=$_GET['show'];

$show_sql="SELECT * FROM statii WHERE id=".$show;
$result=mysqli_query($foo_connection,$show_sql);

if(mysqli_num_rows($result)>0){
    print "<table border='1px'>
            <tr>
                <td>ID</td>
                <td>Author</td>
                <td>Title</td>
                <td>Content</td>
                <td>Published</td>
            </tr>";
    foreach ($result as $key => $item) {
        print "<tr>".
            "<td>".$item['id']."</td>".
            "<td>".$item['authros_name']."</td>".
            "<td>".$item['title']."</td>".
            "<td>".$item['content']."</td>".
            "<td>".$item['published_at']."</td>".
            "</tr>";
    }
    print "</table>";
}

else{
    print "No result";
}