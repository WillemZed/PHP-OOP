<?php
    class Pikachu extends Pokemon{
        
        public function __construct(){
            $name = "Pikachu";
            $type =  "Lightning";
            $health = "60";
            $attack = [["Electric Ring", 50],["Pika Punch", 20]];
            $weakness = ["Fire" , 2];
            $resistance = ["Fighting", 20];

            $this->name = $name;
            $this->type = $type;
            $this->health = $health;
            $this->attack = $attack;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
            self::$count++;

        }
        //Pokemons with SET
        // function setPokemon($name, $type, $health, $attack, $weakness, $resistance) {
        //     $this->name = $name;
        //     $this->type = $type;
        //     $this->health = $health;
        //     $this->attack = $attack;
        //     $this->weakness = $weakness;
        //     $this->resistance = $resistance;
        //     self::$count++;
        // }
    }

?>