<form action="update-process.php" method="post">
    <?php foreach ($get_item_by_id as $key => $item): ?>
        <input type="hidden" name="id" value="<?php $item['id']?>">
        <div>
            <input type="text" name="article_title" value="<?php  print $item['article_title']?>">
        </div>
        <div>
            <textarea name="content" cols="30" rows="10"><?php print $item['content'] ?></textarea>
        </div>
        <div>
            <input type="text" name="author" value="<?php print $item['author'] ?>">
        </div>
        <div>
            <input type="text" name="published" value="<?php print $item['published'] ?>">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    <?php endforeach ?>
</form>