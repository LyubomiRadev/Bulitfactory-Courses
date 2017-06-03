<?php

    $favoriteColors=array(
        "most_favorite"=> "red",
        "second_favorite"=>"green",
        "third_favorite"=>"yellow",
        "least_favorite"=>"black"
    );
function colors($variable){
    print "My favorite colors are:"."<br>";
    for($i=0;$i<count($variable);$i++){
       foreach ($variable as $key=>$color){
           print $key." ".$color."<br>";

       }
        break;
    }
}

colors($favoriteColors);