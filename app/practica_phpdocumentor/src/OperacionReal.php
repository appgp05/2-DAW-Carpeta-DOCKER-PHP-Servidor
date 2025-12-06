<?php
    class OperacionReal extends Operacion {
        public function __construct(Operacion $operacion){
            parent::__construct($operacion->operando1.$operacion->operador.$operacion->operando2);
        }

        public function calcular(): float {
            $resultado = null;

            var_dump($this->operador, $this->operando1, $this->operando2);

            switch ($this->operador) {
                case "+":
                    $resultado = $this->operando1 + $this->operando2;
                    break;
                case "-":
                    $resultado = $this->operando1 - $this->operando2;
                    break;
                case "*":
                    $resultado = $this->operando1 * $this->operando2;
                    break;
                case "/":
                    $resultado = $this->operando1 / $this->operando2;
                    break;
                default:
                    break;
            }

            return $resultado;
        }
    }
?>