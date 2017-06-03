<?php

$personalInformation=[
    "Lyubomir",
    "Radev",
    29,
    "Gabrovo"
];

$interestsInfo=[
    "favouriteSport"=>"Football",
        [
            "favouriteTeam"=>"Manchester United",
            "favouritePlayer"=>"David Beckham"

        ],
    "favouriteBook"=>"Silmarilion",
    "favouriteActivity"=>"Hiking"
];

echo "My name is ".$personalInformation[0]." "."and I am ".$personalInformation[2]." years old."."<br>";
echo "My favourite sport is ".$interestsInfo["favouriteSport"]." and my favourite team is ".$interestsInfo[0]["favouriteTeam"]."."."<br>";
echo "The book I liked reading the most is ".$interestsInfo["favouriteBook"]."."."<br>"."<br>";

var_dump($interestsInfo);
?>