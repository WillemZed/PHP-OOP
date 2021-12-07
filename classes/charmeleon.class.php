<?php
    class Charmeleon extends Pokemon{
        public function __construct(){
            $name = "Charmeleon";
            $type =  "Fire";
            $health = "60";
            $attack0 = new Attack("Head Butt", 10);//["Pika Punch", 20]
            $attack1 = new Attack("Flare", 30);
            $weakness = new Weakness("Water", 2);
            $resistance = new Resistance("Lightning", 10);
            
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