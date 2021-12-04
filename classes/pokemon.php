<?php

require("classes/pikachu.php");
require("classes/charmeleon.php");
require("classes/attack.php");

class Pokemon{
    public $name;
    public $type;
    public $health;
    public $attack;
    public $weakness;
    public $resistance;
    public static $count;

    public function __construct($name, $type, $health, $attack, $weakness, $resistance)
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = $health;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$count++;
    }

    public function getPopulation() {
        if(Pokemon::$count >1) {
            echo "There are ". Pokemon::$count. " ". $this->name. "'s!";
        } else {
            echo "There is only ". Pokemon::$count. " ". $this->name. "!";
        }
        
    }

    public function attack($attackedPokemon) {

        $attackersAttack = $this->attack[1];
        echo "<br>";
        echo $this->name. " has ". $this->health. " hp";
        echo "<br>";
        echo $attackedPokemon->name. " has ". $attackedPokemon->health. " hp";
        echo "<br>";
        echo $this->name. " used ". $this->attack[0]. " on ". $attackedPokemon->name. "!";
        echo "<br>";

        if($this->type == $attackedPokemon->weakness[0]) {
            echo "It was super effective! ";
            $attackersAttack = $attackersAttack * $attackedPokemon->weakness[1];
        } 

        if($this->type != $attackedPokemon->weakness[0]) {
            echo "It was not super effective... ";
            $attackersAttack = $attackersAttack - $attackedPokemon->resistance[1];
        }

        echo "<br>";
        echo $attackedPokemon->name. " took ". $attackersAttack. " damage!";

        $attackedPokemon->health = $attackedPokemon->health - $attackersAttack;

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

