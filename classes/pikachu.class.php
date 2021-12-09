<?php
    class Pikachu extends Pokemon{
        public function __construct(){
            $type =  "Lightning";
            $health = "60";
            $attack0 = new Attack("Electric Ring", 50);
            $attack1 = new Attack("Pika Punch", 20);
            $weakness = new Weakness("Fire", 2);
            $resistance = new Resistance("Fighting", 20);

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