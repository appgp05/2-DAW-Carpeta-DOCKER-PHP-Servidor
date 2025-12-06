<?php
    class Operacion {
        const REAL = 1;
        const RACIONAL = 2;
        const ERROR = 3;
        protected string $tipo;
        protected string $operador;
        protected string $operando1;
        protected string $operando2;
        public function __construct($textoOperacion){
            $tipo = self::resolverTipo($textoOperacion);
            var_dump($tipo);

            switch ($tipo) {
                case self::REAL:
                    $operadorYOperandos = $this->resolverOperadorYOperandos($textoOperacion, "/[+\-*\/]/");
                    break;
                case self::RACIONAL:
                    $operadorYOperandos = $this->resolverOperadorYOperandos($textoOperacion, "/[+\-*:]/");
                    break;
                case self::ERROR:
                    $operadorYOperandos = ["", "", ""];
                    break;
            }

            $this->tipo = $tipo;
            $this->operador = $operadorYOperandos[0];
            $this->operando1 = $operadorYOperandos[1];
            $this->operando2 = $operadorYOperandos[2];
        }

        private function resolverTipo(string $textoOperacion): string{
            $patronNumeroReal = "\-?[0-9]([0-9]+)?(\.[0-9]+)?";
            $patronOperadorReal = "[+\-*\/]";
            $patronReal = "/^{$patronNumeroReal}{$patronOperadorReal}{$patronNumeroReal}$/";

            $patronNumeroRacional = "\-?[1-9]([0-9]+)?(\/[1-9]([0-9]+)?)?";
            $patronOperadorRacional = "[+\-*:]";
            $patronRacional = "/^{$patronNumeroRacional}{$patronOperadorRacional}{$patronNumeroRacional}$/";


            switch (true) {
                case preg_match($patronReal, $textoOperacion):
                    return self::REAL;
                case preg_match($patronRacional, $textoOperacion):
                    return self::RACIONAL;
                default:
                    return self::ERROR;
            }
        }

        private function resolverOperadorYOperandos(string $textoOperacion, string $patronOperadores): array{
            preg_match($patronOperadores, $textoOperacion, $operador);
            $operadorYOperadores[0] = $operador[0];

            $operandos = preg_split($patronOperadores, $textoOperacion);
            $operadorYOperadores[1] = $operandos[0];
            $operadorYOperadores[2] = $operandos[1];

            return $operadorYOperadores;
        }

        public function calcular(): float|Racional|string {
            switch ($this->tipo) {
                case self::REAL:
                    $operacionReal = new OperacionReal($this);
                    return $operacionReal->calcular();
                case self::RACIONAL:
                    $operacionRacional = new OperacionRacional($this);
                    return $operacionRacional->calcular();
                case self::ERROR:
                    return "<p class='destacado'>Operacion inválida</p>";
            }
        }
    }
?>