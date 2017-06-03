<!-- Таблица с данни от MySQL таблица articles -->
<table border="1">
    <tr>
        <th>Id</th>
        <th>Heading</th>
        <th>Text</th>
        <th>Author</th>
        <th>Published</th>
        <th>Update</th>
    </tr>
    <!-- Цикъл обхождащ таблицата articles и извличащ информацията от нея -->
    <?php foreach($results as $key => $item): ?>
        <tr>
            <td><?php print $item['id']; ?></td>
            <td><?php print $item['heading']; ?></td>
            <td><?php print $item['text']; ?></td>
            <td><?php print $item['author']; ?></td>
            <td><?php print $item['published']; ?></td>
            <td><a href="update.php?id=<?php print $item['id']; ?>">Update</a></td>
        </tr>
    <?php endforeach ?>
</table>