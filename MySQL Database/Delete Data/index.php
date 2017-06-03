<?php


    include "app" . DIRECTORY_SEPARATOR . "config.php";
    include "app" . DIRECTORY_SEPARATOR . "db-connection.php";

    $connection_foo= database_connection($host,$user_name,$pass,$database);
    //ORDER BY  ни подрежда информацията във възходящ(default)/нисходяш(DESC) ред. Тук е зададено да ги подрежда според датата и часа на издаване
    $sql = "SELECT * FROM articles";

    //изпълнение на sql заявката
    $result = mysqli_query($connection_foo,$sql);

    //num_rows брои редовете в таблицата
    if(mysqli_num_rows($result) > 0){

        print "<table>
                <tr>
                <th>Article ID</th>
                <th>Article Heading</th>
                <th>Article Text</th>
                <th>Article Author</th>
                <th>Article Published</th>
                <th>Article Delete</th>
                </tr>";
        foreach ($result as $key => $columns){
            print"<tr>".
                    "<td>".$columns['id']."</td>".
                    "<td>".$columns['article_title']."</td>".
                    "<td>".$columns['content']."</td>".
                    "<td>".$columns['author']."</td>".
                    "<td>".$columns['published']."</td>".
                    "<td><a href='app/sql/delete.php?trii=".$columns['id']."'>Delete</a></td>";
                "</tr>"
            ;

        }
             print "</table>";
    }
    else{
        echo "No results.";
    }
    mysqli_close($connection_foo);




