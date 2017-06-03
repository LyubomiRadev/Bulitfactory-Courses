<?php

    $favoriteBrands=array(
        "Sony",
        "Adidas",
        "Vaude",
        "Canyon",
        "Citroen"
    );

    function favoriteThings($brands){
        for($i=0;$i<count($brands);$i++){
            echo "<li>$brands[$i]</li>";
        }
    }

    favoriteThings($favoriteBrands);
