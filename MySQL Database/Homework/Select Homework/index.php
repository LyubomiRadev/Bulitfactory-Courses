<?php

    include "app".DIRECTORY_SEPARATOR."config.php";
    include "app".DIRECTORY_SEPARATOR."database_connection.php";

    $foo_connect = check_con($host, $user_name, $password, $database);
    $select_sql = "SELECT * FROM articles";
    $result = mysqli_query($foo_connect,$select_sql);

    if(mysqli_num_rows($result)> 0){
        print "<table>
                        <tr>
                            <th>ID</th>
                            <th>Article</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th>Published</th>
                        </tr>
                ";
        foreach ($result as $key => $cols){
            print "<tr>".
                "<td>".$cols['id']."</td>".
                "<td>".$cols['article_title']."</td>".
                "<td>".$cols['content']."</td>".
                "<td>".$cols['author']."</td>".
                "<td>".$cols['published']."</td>".
                "</tr>";
        }
        print "</table>";
    }