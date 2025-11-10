<?php
    class Medico extends Persona {
        use TraitSalario;
        public function __construct(
            string $nombre,
            string $fNac,
            string $direccion,
            private string $especialidad,
            float $salario
        ) {
            parent::__construct($nombre, $fNac, $direccion);
            $this->setSalario($salario);
        }
        public function __destruct()
        {
            parent::__destruct();
        }
        public function __toString(): string {
            return parent::__toString()." Soy médico y mi espcialidad es: $this->especialidad. Además cobro $this->salario";
        }
    }
?>
