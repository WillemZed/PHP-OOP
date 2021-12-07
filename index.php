<?php 
    include("autoLoader.php");
    $pikachu = new Pikachu();
    $charmeleon = new Charmeleon();

    //Pokemons with SET
    // $pikachu->setPokemon("Pikachu", "Lightning", "60", [["Electric Ring", 50],["Pika Punch", 20]], ["Fire" , 2], ["Fighting", 20]);
    // $charmeleon->setPokemon("Charmeleon", "Fire", "60", [["Head Butt", 10 ],["Flare", 30]], ["Water", 2], ["Lightning", 20]);

    echo $pikachu->getPopulation();
    echo "<br>";

    echo $pikachu->attack(1, $charmeleon);
    echo $charmeleon->attack(0, $pikachu);
    echo $pikachu->attack(0, $charmeleon);
    echo $charmeleon->attack(1, $pikachu);

    echo "<br>";

    echo $pikachu->getPopulation();
    

?>