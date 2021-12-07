<?php
    class Pikachu extends Pokemon{
        public function __construct(){
            $name = "Pikachu";
            $type =  "Lightning";
            $health = "60";
            $attack0 = new Attack("Electric Ring", 50);//["Pika Punch", 20]
            $attack1 = new Attack("Pika Punch", 20);
            $weakness = new Weakness("Fire", 2);
            $resistance = new Resistance("Fighting", 20);

            $this->name = $name;
            $this->type = $type;
            $this->health = $health;
            $this->attack0 = $attack0;
            $this->attack1 = $attack1;
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