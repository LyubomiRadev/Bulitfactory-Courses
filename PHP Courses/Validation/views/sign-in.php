<!--htmlspecialchars преобразува всеки символ след url в безопасен такъв и предодвратява писане на допълнителен кода от недоброжелатели-->

<form class="sign_up"<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
    <div class="fields" >
        <input type="text" name="user_name" placeholder="Please enter user name" >
        <span class="error"<?php echo $user_name_error ?>></span>
    </div>
    <div class="fields">
        <input type="email" name="user_email" placeholder="Please enter your email">
        <span class="error"><?php echo $user_email_error ?></span>
    </div>
    <div class="fields">
        <input type="text" name="user_phone" placeholder="Please enter your phone number">
        <span class="error"><?php echo $user_phone_error ?></span>
    </div>
    <div class="fields">
        <input type="submit" value="Send">
    </div>
</form>