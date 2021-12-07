<?php
    class Weakness {
        public $type;
        public $modifier;

        public function __construct($type, $modifier)
        {
            $this->type = $type;
            $this->modifier = $modifier;
        }

    }