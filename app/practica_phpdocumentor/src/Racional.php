<?php
    class Racional {
        private int $numerador;
        private int $denominador;
        public function __construct(
            int|string $numerador = 1,
            int $denominador = 1
        ) {
            if(is_string($numerador)){
                $numeradorYDenominador = explode("/", $numerador);
                $numerador = $numeradorYDenominador[0];
                $denominador = $numeradorYDenominador[1]??1;
            }

            $this->numerador = (int) $numerador;
            $this->denominador = $denominador;
        }

        public function __toString(): string {
            return "$this->numerador/$this->denominador";
        }

        public static function simplificar(Racional $racional): Racional {
            $numerador = $racional->numerador;
            $denominador = $racional->denominador;

            while($numerador % $denominador > 1){
                $antiguoNumerador = $numerador;
                $numerador = $denominador;
                $denominador = $antiguoNumerador % $denominador;
            }

            return new Racional($racional->numerador/$denominador, $racional->denominador/$denominador);
        }

        public function getNumerador(): int {
            return $this->numerador;
        }

        public function getDenominador(): int
        {
            return $this->denominador;
        }
    }
?>