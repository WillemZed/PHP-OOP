<?php

class Pokemon {
    // Create properties
    private $name;
    protected $type;
    protected $health;
    protected $attack0;
    protected $attack1;
    protected $weakness;
    protected $resistance;
    protected static $count;

    // Create function to get the total pokemons
    public static function getPopulation() {
        if(Pokemon::$count >1) {
            echo "There are ". Pokemon::$count. " pokemons!";
        } else {
            echo "There is only ". Pokemon::$count. " pokemon!";
        }

        if(Pokemon::$count == 0) {
            echo "There are no pokemons left...";
        }
    }

    public function setName($name) {
        $this->name = $name;
        if($this->name) {
            return $this->name;
        } else {
            echo "name is not set";
        }
    }

    // Create function for when a pokemon attack another pokemon
    public function attack($attackId, $attackedPokemon) {
        if($attackId == 0) {
            $attackersAttack = $this->attack0;
        }

        if($attackId == 1) {
            $attackersAttack = $this->attack1;
        }
        echo "<br>";
        echo $this->name. " has ". $this->health. " hp";
        echo "<br>";
        echo $attackedPokemon->name. " has ". $attackedPokemon->health. " hp";
        echo "<br>";
        echo $this->name. " used ".  $attackersAttack->name. " on ". $attackedPokemon->name. "!";
        echo "<br>";

        if($this->type == $attackedPokemon->weakness->type) {
            echo "It was super effective! ";
            $attackersAttack->damage = $attackersAttack->damage * $attackedPokemon->weakness->modifier;
        } 

        if($this->type != $attackedPokemon->weakness->type) {
            echo "It was not super effective... ";
            $attackersAttack->damage = $attackersAttack->damage - $attackedPokemon->resistance->modifier;
        }

        echo "<br>";
        echo $attackedPokemon->name. " took ". $attackersAttack->damage. " damage!";

        $attackedPokemon->health = $attackedPokemon->health - $attackersAttack->damage;

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

