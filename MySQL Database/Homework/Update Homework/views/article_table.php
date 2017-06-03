<table border="1">
    <tr>
        <th>ID</th>
        <th>Heading</th>
        <th>Text</th>
        <th>Author</th>
        <th>Published</th>
        <th>Update</th>
    </tr>
    <?php foreach ($result_from_table as $key => $item_data): ?>
        <tr>
            <td><?php print $item_data['id']?></td>
            <td><?php print $item_data['article_title']?></td>
            <td><?php print $item_data['content']?></td>
            <td><?php print $item_data['author']?></td>
            <td><?php print $item_data['published']?></td>
            <td><a href="update.php?id=<?php print $item_data['id']; ?>">Update</a></td>
        </tr>
    <?php endforeach; ?>
</table>