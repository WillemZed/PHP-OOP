<?php

require("classes/charizard.php");
require("classes/blastoise.php");
require("classes/attack.php");

class Pokemon{
    public $name;
    public $type;
    public $health;
    public $attack;
    public $weakness;
    public $resistance;

    public function __construct($name, $type, $health, $attack, $weakness, $resistance)
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = $health;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function attack($attackedPokemon) {
        echo "<br>";
        echo $this->name. " has ". $this->health. " hp";
        echo "<br>";
        echo $attackedPokemon->name. " has ". $attackedPokemon->health. " hp";
        echo "<br>";
        echo $this->name. " used ". $this->attack[0]. " on ". $attackedPokemon->name. "!";
        echo "<br>";

        if($this->type == $attackedPokemon->weakness[0]) {
            echo "It was super effective! ";
            $this->attack[1] = $this->attack[1] * $attackedPokemon->weakness[1];
        } 

        if($this->type != $attackedPokemon->weakness[0]) {
            echo "It was not super effective... ";
            $this->attack[1] = $this->attack[1] - $attackedPokemon->resistance[1];
        }
        echo "<br>";
        echo $attackedPokemon->name. " took ". $this->attack[1]. " damage!";

        $attackedPokemon->health = $attackedPokemon->health - $this->attack[1];
        echo "<br>";

    }
}

