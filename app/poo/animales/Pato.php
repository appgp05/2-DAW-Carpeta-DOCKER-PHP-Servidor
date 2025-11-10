<?php
    class Pato extends Animal{
        public function __construct(int $patas, string $especie){
            parent::__construct($patas, $especie);
        }

        public function hablar() {
            return "Quack, quack, quack";
        }
    }
?>