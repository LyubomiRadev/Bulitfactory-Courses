<?php

    //така дефинирана, променливата не може да се използва във фунцкия и за това се налгада да бъде добваена като global във функцията
    $first_name= "Lyubo";
    $last_name="Radev";

    function show_full_name (){
        global $first_name;
        global $last_name;
        echo $first_name." ".$last_name;
    }

    show_full_name();

    echo "<br>";

    //така дефинирана,променливата може да бъде достъпена от всякъде
    $GLOBALS['x']=20;
    $GLOBALS['y']=30;

    function add_numbers(){
        echo $GLOBALS['x'] + $GLOBALS['y'];
    }

    add_numbers();

