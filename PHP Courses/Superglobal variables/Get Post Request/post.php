<!-- POST е с по-голяма сигурност от Get, с него пращаме към сървъра -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Method</title>
</head>
<body>

<form action="" method="POST" >
    <input type="text" name="first_name">
    <input type="submit" name="submit_button" value="Send First Name">
    <br>
    <input type="text" name="last_name">
    <input type="submit" value="Send Last Name">
</form>

<?php

//логиката ни не изплюва грешка ако не е зададена стойност в input полето
if(isset($_POST['submit_button'])){
    echo $_POST['first_name'];
}


if(isset($_POST['last_name'])){
    //стойността може да бъде записвана в променлива
    $last_name=$_POST['last_name'];
    echo " ".$last_name;
}

?>

</body>
</html>