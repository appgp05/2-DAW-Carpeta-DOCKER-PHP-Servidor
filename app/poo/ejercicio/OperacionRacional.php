<?php
    class OperacionRacional extends Operacion {
        public static function resolver(String $textoOperacion): Racional {
            preg_match("/[+\-*:]/", $textoOperacion, $operador);
            $operador = $operador[0];
            var_dump($operador);

            $operandos = preg_split("/[+\-*:]/", $textoOperacion);
            $operando1 = new Racional($operandos[0]);
            $operando2 = new Racional($operandos[1]);

            var_dump($operador, $operando1, $operando2);

            switch ($operador) {
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
        private static function sumar(Racional $racional1, Racional $racional2): Racional {
            $numerador = $racional1->getNumerador() * $racional2->getDenominador() + $racional1->getDenominador() * $racional2->getNumerador();
            $denominador = $racional1->getDenominador() * $racional2->getDenominador();

            var_Dump($racional1, $racional2);
            var_dump($numerador, $denominador);

            $resultado = Racional::simplificar(new Racional($numerador, $denominador));

            return $resultado;
        }
        private static function restar(Racional $racional1, Racional $racional2): Racional {
            $numerador = $racional1->getNumerador() * $racional2->getDenominador() - $racional1->getDenominador() * $racional2->getNumerador();
            $denominador = $racional1->getDenominador() * $racional2->getDenominador();

            $resultado = Racional::simplificar(new Racional($numerador, $denominador));

            return $resultado;
        }
        private static function multiplicar(Racional $racional1, Racional $racional2): Racional {
            $numerador = $racional1->getNumerador() * $racional2->getNumerador();
            $denominador = $racional1->getDenominador() * $racional2->getDenominador();

            $resultado = Racional::simplificar(new Racional($numerador, $denominador));

            return $resultado;
        }
        private static function dividir(Racional $racional1, Racional $racional2): Racional {
            $numerador = $racional1->getNumerador() * $racional2->getDenominador();
            $denominador = $racional1->getDenominador() * $racional2->getNumerador();

            $resultado = Racional::simplificar(new Racional($numerador, $denominador));

            return $resultado;
        }
    }
?>
