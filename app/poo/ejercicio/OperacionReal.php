<?php
    class OperacionReal extends Operacion {
        public static function resolver(String $textoOperacion): float {
            if(preg_match("/^-/", $textoOperacion)){
                $posscionAnadidaAlArray = 1;
            } else {
                $posscionAnadidaAlArray = 0;
            }

            preg_match_all("/(-?)[+\-*\/]/", $textoOperacion, $operador);
            var_dump($operador);
            $operador = $operador[0][$posscionAnadidaAlArray];

            $operandos = preg_split("/(-?)[+\-*:\/]/", $textoOperacion);
            var_dump($operandos);
            $operando1 = $operandos[0 + $posscionAnadidaAlArray];
            $operando2 = $operandos[1 + $posscionAnadidaAlArray];

            $resultado = null;

            var_dump($operador, $operando1, $operando2);

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