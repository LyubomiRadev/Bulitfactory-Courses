<table>
    <tr>
        <th>Article ID</th>
        <th>Article Title</th>
        <th>Article Content</th>
        <th>Article Author</th>
        <th>Article Publishing Date</th>
        <th>Update</th>
    </tr>
    <?php foreach ($results as $key => $item): ?>
        <tr>
            <td><?php print $item['id'];?></td>
            <td><?php print $item['article_title'];?></td>
            <td><?php print $item['content'];?></td>
            <td><?php print $item['author'];?></td>
            <td><?php print $item['published'];?></td>
            <td><a href="update.php?id=<?php print $item['id']; ?>">Update</a></td>
        </tr>
    <?php endforeach?>
</table>