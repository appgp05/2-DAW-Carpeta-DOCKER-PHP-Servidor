<?php
    Trait TraitSalario {
        public function __construct(
            private float $salario
        ) {}
        public function getSalario(): float {
            return $this->salario;
        }
        public function setSalario(float $salario): void {
            $this->salario = $salario;
        }
    }
?>
