<?php
namespace clases;
class Jugada {
    private array $posiciones = [];

    public function __construct(
        private int $numero,
        private array $combinacionColores,
    ){}

    public function getCombinacionColores(): array{
        return $this->combinacionColores;
    }

    public function getPosiciones(): array
    {
        return $this->posiciones;
    }


    public function comprobarJugada(): bool{
        if(array_find($this->combinacionColores, fn($color) => $color == "Colores") == null){
            forEach($this->combinacionColores as $clave => $valor){
                $todosLosColores = Colores::obtenerColores();

                $coloreCompleto = array_find($todosLosColores, fn($color) => $color == $valor);

                $this->combinacionColores[$clave] = $coloreCompleto;
            }

            $this->declararPosiciones();

            var_dump("true");
            return true;
        } else {
            var_dump("false");
            return false;
        }
    }

    private function declararPosiciones(): void{
        $claveJuego = $_SESSION["clave"];

        $posicionesNegras = [];
        $posicionesBlancas =[];

        forEach($this->combinacionColores as $claveColorJugada => $colorJugada){
            var_dump($colorJugada);
            var_dump($claveJuego[$claveColorJugada]);

            if($colorJugada == ($claveJuego[$claveColorJugada]??null)){
                $posicionesNegras[] = $claveColorJugada;
                $claveJuego[$claveColorJugada] = null;
            } else {
                forEach($claveJuego as $claveColorClaveJuego => $colorClaveJuego){
                    if($colorJugada == ($colorClaveJuego??null)){
                        $posicionesBlancas[] = $claveColorJugada;
                        $claveJuego[$claveColorClaveJuego] = null;
                    }
                }
            }
        }

        var_dump([$posicionesNegras, $posicionesBlancas]);

        $this->posiciones = [$posicionesNegras, $posicionesBlancas];
    }
}
?>