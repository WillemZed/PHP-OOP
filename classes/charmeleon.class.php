<?php
    class Charmeleon extends Pokemon{
        public function __construct(){
            $type =  "Fire";
            $health = "60";
            $attack0 = new Attack("Head Butt", 10);
            $attack1 = new Attack("Flare", 30);
            $weakness = new Weakness("Water", 2);
            $resistance = new Resistance("Lightning", 10);
            
            $this->type = $type;
            $this->health = $health;
            $this->attack0 = $attack0;
            $this->attack1 = $attack1;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
            self::$count++;
        }
    }

?>