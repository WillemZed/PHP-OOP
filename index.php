<?php 
    include("autoLoader.php");
    $pikachu = new Pikachu();
    $charmeleon = new Charmeleon();

    // display total pokemon
    echo Pokemon::getPopulation();

    // set the name of pokemon
    $pikachu->setName("Pikachu");
    $charmeleon->setName("Charmeleon");

    echo "<br>";

    // pokemon attack opponent
    echo $pikachu->attack(0, $charmeleon);
    echo $charmeleon->attack(0, $pikachu);
    echo $pikachu->attack(0, $charmeleon);
    echo $charmeleon->attack(0, $pikachu);

    echo "<br>";
    

    // display total pokemon again
    echo $pikachu->getPopulation();
    

?>