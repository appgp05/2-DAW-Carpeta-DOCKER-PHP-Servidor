<?php
    class OperacionRacional extends Operacion {
        public function __construct($operacion){
            parent::__construct($operacion->operando1.$operacion->operador.$operacion->operando2);
        }
        public function calcular(): Racional {
            $operando1 = new Racional($this->operando1);
            $operando2 = new Racional($this->operando2);

            switch ($this->operador) {
                case "+":
                    $resultado = self::sumar($operando1, $operando2);
                    break;
                case "-":
                    $resultado = self::restar($operando1, $operando2);
                    break;
                case "*":
                    $resultado = self::multiplicar($operando1, $operando2);
                    break;
                case ":":
                    $resultado = self::dividir($operando1, $operando2);
                    break;
                default:
                    $resultado = new Racional();
            }

            return $resultado;
        }
        private function sumar(Racional $racional1, Racional $racional2): Racional {
            $numerador = $racional1->getNumerador() * $racional2->getDenominador() + $racional1->getDenominador() * $racional2->getNumerador();
            $denominador = $racional1->getDenominador() * $racional2->getDenominador();

            var_Dump($racional1, $racional2);
            var_dump($numerador, $denominador);

            $resultado = Racional::simplificar(new Racional($numerador, $denominador));

            return $resultado;
        }
        private function restar(Racional $racional1, Racional $racional2): Racional {
            $numerador = $racional1->getNumerador() * $racional2->getDenominador() - $racional1->getDenominador() * $racional2->getNumerador();
            $denominador = $racional1->getDenominador() * $racional2->getDenominador();

            $resultado = Racional::simplificar(new Racional($numerador, $denominador));

            return $resultado;
        }
        private function multiplicar(Racional $racional1, Racional $racional2): Racional {
            $numerador = $racional1->getNumerador() * $racional2->getNumerador();
            $denominador = $racional1->getDenominador() * $racional2->getDenominador();

            $resultado = Racional::simplificar(new Racional($numerador, $denominador));

            return $resultado;
        }
        private function dividir(Racional $racional1, Racional $racional2): Racional {
            $numerador = $racional1->getNumerador() * $racional2->getDenominador();
            $denominador = $racional1->getDenominador() * $racional2->getNumerador();

            $resultado = Racional::simplificar(new Racional($numerador, $denominador));

            return $resultado;
        }
    }
?>
