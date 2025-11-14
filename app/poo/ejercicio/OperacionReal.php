<?php
    class OperacionReal extends Operacion {
        public static function Resolver(String $textoOperacion): float {
            preg_match("/[+\-*\/]/", $textoOperacion, $operador);
            $operador = $operador[0];

            $operandos = preg_split("/[+\-*:\/]/", $textoOperacion);
            $operando1 = $operandos[0];
            $operando2 = $operandos[1];

            $resultado = null;

            switch ($operador) {
                case "+":
                    $resultado = $operando1 + $operando2;
                    break;
                case "-":
                    $resultado = $operando1 - $operando2;
                    break;
                case "*":
                    $resultado = $operando1 * $operando2;
                    break;
                case "/":
                    $resultado = $operando1 / $operando2;
                    break;
                default:
                    break;
            }

            return $resultado;
        }
    }
?>