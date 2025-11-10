<?php
    abstract class Animal {
        public function __construct(
            private int $patas,
            private string $especie
        ) {}
        public function getPatas(): int
        {
            return $this->patas;
        }
        public function getEspecie(): string
        {
            return $this->especie;
        }

        public function __toString(): string
        {
            return "Soy un animal de la especie ".$this->getEspecie()." y tengo ".$this->getPatas()." patas.";
        }

        public abstract function hablar();
    }
?>
