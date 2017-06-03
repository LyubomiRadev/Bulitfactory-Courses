
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
   <div>
       <input type="text" name="name" placeholder="Please type in your name">
   </div>
    <div>
        <input type="email" name="email" placeholder="Please type in your email">
    </div>
    <div>
        <textarea name="personal"  cols="30" rows="10" placeholder="Tell us something about yourself"></textarea>
    </div>
    <div>
        <input type="submit" name="submit" value="Send">
    </div>
</form>
<?php
if(isset($_POST['submit'])){
    print "Hello, my name is ".$_POST['name']." my email is ".$_POST['email'].". Personal info: ".$_POST['personal'];

}
?>
</body>
</html>

