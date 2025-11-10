<?php
    class Bailarin extends Persona {
        public function __construct (
            string $nombre,
            string $fNac,
            string $direccion,
            private string $estilo
        ) {
            parent::__construct($nombre, $fNac, $direccion);
        }
        public function __destruct()
        {
            parent::__destruct();
        }
        public function __toString(): string
        {
            return parent::__toString()." Soy Bailarin y mi estilo es: $this->estilo";
        }
    }
?>