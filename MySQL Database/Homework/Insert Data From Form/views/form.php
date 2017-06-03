<form action="" method="post" class="form">
    <input type="text" name="user_name" class="text_field" placeholder="Enter your user name"  >
    <span class="error"><?php echo $error ?></span>
    <input type="text" name="phone_number" class="text_field" placeholder="Enter your phone number">
    <span class="error"><?php echo $error ?></span>
    <input type="email" name="user_email" class="text_field" placeholder="Enter your email">
    <span class="error"><?php echo $error ?></span>
    <input type="text" name="favorite_brand" class="text_field" placeholder="Enter your favorite brand">
    <span class="error"><?php echo $error ?></span>
    <input type="text" name="favorite_team" class="text_field" placeholder="Enter your favorite team">
    <span class="error"><?php echo $error ?></span>
    <input type="text" name="favorite_meal"  class="text_field" placeholder="Enter your favorite meal">
    <span class="error"><?php echo $error ?></span>
    <input type="text" name="favorite_City" class="text_field" placeholder="Enter your favorite city" >
    <span class="error"><?php echo $error ?></span>
    <input type="text" name="favorite_season" class="text_field" placeholder="Enter your favorite season" >
    <span class="error"><?php echo $error ?></span>
    <br>
    <input type="submit" value="Send">
</form>