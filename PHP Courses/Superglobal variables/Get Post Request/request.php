<!-- Request е супер глобална променлива и не е необходимо да се поставя оператора global за да бъде достъпена -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request</title>
</head>
<body>

<form action="" method="get" >
    <input type="text" name="first_name">
    <input type="submit" name="submit_button" value="Send First Name">
    <br>
    <input type="text" name="last_name">
    <input type="submit" value="Send Last Name">
</form>

<?php

//логиката ни не изплюва грешка ако не е зададена стойност в input полето
if(isset($_GET['submit_button'])){
    echo $_GET['first_name'];
}


if(isset($_GET['last_name'])){
    //стойността може да бъде записвана в променлива
    $last_name=$_GET['last_name'];
    echo " ".$last_name;
}

?>

</body>
</html>