<?php
    class Persona {
        private static $cantidadDePersonas = 0;
        public function __construct(
            protected string $nombre,
            protected string $fNac,
            protected string $direccion
        ) {
            Persona::$cantidadDePersonas++;
        }
        public function __destruct(){
            self::$cantidadDePersonas--;
        }
        public function __toString(): string {
            return "Nombre: $this->nombre, Fecha de nacimeinto: $this->fNac, Dirección: $this->direccion.";
        }
        public static function getCantidadDePersonas(): int
        {
            return self::$cantidadDePersonas;
        }
        public function calcularEdad(){
            $edad = $this->fNac;
            return $edad;
        }
    }
?>
