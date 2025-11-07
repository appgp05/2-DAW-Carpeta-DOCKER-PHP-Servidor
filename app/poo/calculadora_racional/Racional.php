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

        public function descomponerFactorialmente(int $numero): Array{
            $numeroActual = $numero;
            $factores = [];

            while($numeroActual > 1) {
                for($i = 2; $i <= $numeroActual; ++$i){
                    if($numeroActual % $i == 0){
                        $numeroActual = $numero / $i;
                        $factores[] = $i;
                        echo "<p>$i,,,,,$numeroActual</p>";
                        break;
                    }
                }
            };
            return $factores;
        }

        public function sumar(Racional $racional): Racional{
            $denominador = $this->denominador * $racional->denominador;
            $numerador = $this->numerador * $racional->denominador + $racional->numerador * $this->denominador;

            return $this->simplificar(new Racional($numerador, $denominador));
        }

        public static function sumarEstatico(Racional $racional1, Racional $racional2): Racional{
            $denominador = $racional1->denominador * $racional2->denominador;
            $numerador = $racional1->numerador * $racional2->denominador + $racional2->numerador * $racional1->denominador;

            return new Racional($numerador, $denominador);
        }

        public function restar(Racional $racional): Racional{
            $denominador = $this->denominador * $racional->denominador;
            $numerador = $this->numerador * $racional->denominador - $racional->numerador * $this->denominador;

            return new Racional($numerador, $denominador);
        }

        public function multiplicar(Racional $racional): Racional{
            $numerador = $this->numerador * $racional->numerador;
            $denominador = $this->denominador * $racional->denominador;

            return new Racional($numerador, $denominador);
        }

        public function dividir(Racional $racional): Racional{
            $numerador = $this->numerador * $racional->denominador;
            $denominador = $this->denominador * $racional->numerador;

            return new Racional($numerador, $denominador);
        }

        public function simplificar(): Racional{
            $numerador = $this->numerador;
            $denominador = $this->denominador;
            $mayor = abs($numerador) > abs($denominador) ? abs($numerador) : abs($denominador);
            $menor = abs($numerador) < abs($denominador) ? abs($numerador) : abs($denominador);

            echo $mayor, $menor;

            for($i = $menor; $i >= 1; --$i){
                if($mayor % $i == 0 && $menor % $i == 0){
                    $numerador = $numerador / $i;
                    $denominador = $denominador / $i;
                    break;
                }
            }

            return new Racional($numerador,$denominador);
        }
    }
?>
