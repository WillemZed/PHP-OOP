<?php    
    require("classes/pokemon.php");
    $charizard = new Charizard("Charizard", "fire", "100", ['flamethrower', 20 ], ["water" , 2], ["grass", 10]);
    $blastoise = new Blastoise("Blastoise", "water", "100", ['surf', 20 ], ["grass" , 2], ["fire", 10]);
    echo $charizard->attack($blastoise);
    echo $blastoise->attack($charizard);
    echo $charizard->attack($blastoise);
    echo "<br>";
    
?>