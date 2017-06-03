<?php

// Извиквам външните файлове.
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db-connection.php";

// Асайнвам към нова променлива връзката със сървъра като тук викам функцията за конекцията с нужните аргументи.
$foo_connection = db_connect($host, $user_name, $user_password, $database);

// Заяваяваме SQL заявка с ключовата дума ORDER BY с помощта на която сортираме информацията по критерии избрани от нас.
$sql = "SELECT * FROM articles";

// Изпълняваме SQL заявката.
$result = mysqli_query($foo_connection, $sql);

// Проверяваме колко реда са намерени и заяваяваме скрипта да се изпълни ако съществуват повече от 0 редове.
if(mysqli_num_rows($result) > 0){

    /* С цикъл обхождаме обекта, като в $cols ще се запазят масиви със съответните ключове,
       които са имената на колоните от таблицата в базата данни.*/
    print "<table>
              <tr>
                <th>Article ID</th>
                <th>Article heading</th>
                <th>Article text</th>
                <th>Article author</th>
                <th>Article published</th>
                <th>Article delete</th>
              </tr>";
    foreach($result as $key => $cols){
        // Принтираме на всяка интерация информацията от съответната колона.
        print "<tr>".
                  "<td>".$cols['id']."</td>".
                  "<td>".$cols['heading']."</td>".
                  "<td>".$cols['text']."</td>".
                  "<td>".$cols['author']."</td>".
                  "<td>".$cols['published']."</td>".
                  "<td><a href='app/sql/delete.php?id=".$cols['id']."'>Delete</a></td>".
              "</tr>";
    }
    print "</table>";
}
else {
    print "0 results";
}

// Затваряме кънекцията със сървъра след, като приключи заявката.
mysqli_close($foo_connection);

/* Домашно упражнение.
 * -------------------------------------------
 * Имплементирайте същата логика за да покажете в новосъздадена страница article.php съдържанието само на една статия спрямо нейното Id.
 * Линка вместо delete да се казва show. Ще трябва да заявите в article.php една sql select заявка, която ще вземе само статията с подавания id параметър и с foreach да изпечатите
 * всички имена на колони със съдържащата информация, както правихме в лекцията за select. Ще трябва да ипълните и mysqli_query().
 * Успех
 */