<?php
    class Racional {
        //atributos
        private int $numerador;
        private int $denominador;

        //métodos
        public function __construct(
            int|string $numerador=1,
            int $denominador=1
        ) {
            if(is_string($numerador)){
                if(str_contains($numerador, "/")){
                    $numeradorYDenominador = explode("/", $numerador);

                    $numerador = $numeradorYDenominador[0];
                    $denominador = $numeradorYDenominador[1];
                }
            }

            $this->numerador = (int) $numerador;
            $this->denominador = $denominador;
        }

        public function __toString(){
            return $this->numerador . "/" . $this->denominador;
//            switch(gettype($this->numerador)){
//                case "string":
//                    return "$this->numerador";
//                case "integer":
//                    return "$this->numerador/$this->denominador";
//                case "NULL":
//                    return "1/10";
//            }
        }
    }
?>
