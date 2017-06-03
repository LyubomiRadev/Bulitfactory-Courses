<?php

    $l=0;
    do{
        echo $l."<br>";
        $l+=5;
    }
    while($l<=30);

    echo "<br>"."<hr>";

    $i=1;
    do{
        if($i%5==0){
            echo $i."<br>";
        }
            $i++;

    }
    while($i<=30);

?>