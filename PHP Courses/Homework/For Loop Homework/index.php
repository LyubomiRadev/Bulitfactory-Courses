<?php

    $hobbies= array(
        "Hiking",
        "Playing sports",
        "Watching football",
        "Reading",
        "Religion",
        "Shopping",
        "Riding my bicycle",
        "Sleeping :)",
        "Trying new food",
        "Gardening"
    );

    for($i=0;$i<count($hobbies);$i++){
        if($i%2==0){
            echo $hobbies[$i]."<br>";
        }
    }

?>