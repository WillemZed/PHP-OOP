<?php
    class Charmeleon extends Pokemon{
        public function __construct(){
            $name = "Charmeleon";
            $type =  "Fire";
            $health = "60";
            $attack = [["Head Butt", 10 ],["Flare", 30]];
            $weakness = ["Water" , 2];
            $resistance = ["Lightning", 20];
            
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