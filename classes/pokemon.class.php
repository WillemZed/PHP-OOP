<?php

class Pokemon {
    // Create properties
    protected $name;
    protected $type;
    protected $health;
    protected $attack;
    protected $weakness;
    protected $resistance;
    protected static $count;


    // Create function to get the total pokemons
    public function getPopulation() {
        if(Pokemon::$count >1) {
            echo "There are ". Pokemon::$count. " ". $this->name. "'s!";
        } else {
            echo "There is only ". Pokemon::$count. " ". $this->name. "!";
        }
        
    }

    // Create function for when a pokemon attack another pokemon
    public function attack($attackId, $attackedPokemon) {

        $attackersAttack = $this->attack[$attackId];
        echo "<br>";
        echo $this->name. " has ". $this->health. " hp";
        echo "<br>";
        echo $attackedPokemon->name. " has ". $attackedPokemon->health. " hp";
        echo "<br>";
        echo $this->name. " used ".  $attackersAttack[0]. " on ". $attackedPokemon->name. "!";
        echo "<br>";

        if($this->type == $attackedPokemon->weakness[0]) {
            echo "It was super effective! ";
            $attackersAttack[1] = $attackersAttack[1] * $attackedPokemon->weakness[1];
        } 

        if($this->type != $attackedPokemon->weakness[0]) {
            echo "It was not super effective... ";
            $attackersAttack[1] = $attackersAttack[1] - $attackedPokemon->resistance[1];
        }

        echo "<br>";
        echo $attackedPokemon->name. " took ". $attackersAttack[1]. " damage!";

        $attackedPokemon->health = $attackedPokemon->health - $attackersAttack[1];

        if($attackedPokemon->health <= 0 ) {
            $this::$count--;
            echo "<br>";
            echo $attackedPokemon->name. "'s health dropped to 0!";
            echo "<br>";
            echo $attackedPokemon->name. " has fainted!";
            echo "<br>";
            echo $this->name. " has won the battle!";
        } else {
            echo "<br>";
            echo $attackedPokemon->name. " has ". $attackedPokemon->health. " hp";
        }
        echo "<br>";

    }
}

