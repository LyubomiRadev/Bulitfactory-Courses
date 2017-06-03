<form action="index.php" method="post">
   <?php foreach ($result as $key => $item_data): ?>
    <input type="hidden" name="id" value="<?php print $item_data['id']; ?>">
       <label for="article_title" > Article Title

       <input type="text" name="article_title" value="<?php print $item_data['article_title'] ?>"></label>

       <textarea name="content"  cols="30" rows="10"><?php print $item_data['content'] ?></textarea>

       <input type="text" name="author" value="<?php print $item_data['author'] ?>" >

       <input type="text" name="published" value="<?php print $item_data['published'] ?>">

       <input type="submit" value="Update">
    <?php endforeach ?>
</form>