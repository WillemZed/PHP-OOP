<?php    
    require("classes/pokemon.php");
    $pikachu = new Pikachu("Pikachu", "Lightning", "60", ['Electric Ring', 50 ], ["Fire" , 2], ["Fighting", 20]);
    $charmeleon = new Charmeleon("Charmeleon", "Fire", "60", ['Flare', 30 ], ["Water" , 2], ["Lightning", 10]);

    echo $pikachu->getPopulation();
    echo "<br>";
    echo $charmeleon->getPopulation();
    echo "<br>";

    echo $pikachu->attack($charmeleon);
    echo $charmeleon->attack($pikachu);
    echo "<br>";
    
    echo $pikachu->getPopulation();
    echo "<br>";
    echo $charmeleon->getPopulation();
    
?>