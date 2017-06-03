<?php

    include "app".DIRECTORY_SEPARATOR."config.php";
    include "app".DIRECTORY_SEPARATOR."db_connection.php";

    $connection_foo = check_con($host, $user_name, $password, $database);
    $select_sql = "SELECT * FROM articles";
    $result = mysqli_query($connection_foo,$select_sql);
    if(mysqli_num_rows($result) > 0){
        print "<table>
                <tr>
                    <th>Article ID</th>
                    <th>Article Title</th>
                    <th>Article Content</th>
                    <th>Article Author</th>
                    <th>Article Publishing Date</th>
</tr>
";
        foreach ($result as $key => $cols){
            print "<tr>".
                "<td>".$cols['id']."</td>".
                "<td>".$cols['article_title']."</td>".
                "<td>".$cols['content']."</td>".
                "<td>".$cols['author']."</td>".
                "<td>".$cols['published']."</td>".
                //Ето тук е грешката ми, но не мога да разбера къде в синтаксиса бъркам
               // "<td><a href='app/sql/show.php?id = <?php print $cols['id'];?>'>Show</a></td>".
                "</tr>";
        }
        print"</table>";
    }

    mysqli_close($connection_foo);