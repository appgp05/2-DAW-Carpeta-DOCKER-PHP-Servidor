<?php
namespace clases;
class Jugada {
    private array $posiciones = [];

    public function __construct(
        private int $numero,
        private array $combinacionColores,
    ){}

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getCombinacionColores(): array{
        return $this->combinacionColores;
    }

    public function getPosiciones(): array
    {
        return $this->posiciones;
    }


    public function comprobarJugadaCorrecta(): bool{
        if(array_find($this->combinacionColores, fn($color) => $color == "Colores") == null){

            $this->declararPosiciones();

            return true;
        } else {
            return false;
        }
    }

    public function comprobarJugadaGanada(): bool{
        if(sizeof($this->posiciones[0]) == 4){
            return true;
        } else {
            return false;
        }
    }

    private function declararPosiciones(): void{
        $claveJuego = $_SESSION["clave"];

        $posicionesNegras = [];
        $posicionesBlancas =[];

        forEach($this->combinacionColores as $claveColorJugada => $colorJugada){
            if($colorJugada == ($claveJuego[$claveColorJugada]??null)){
                $posicionesNegras[] = $claveColorJugada;
                $claveJuego[$claveColorJugada] = null;
            }
        }

        forEach($this->combinacionColores as $claveColorJugada => $colorJugada){
            forEach($claveJuego as $claveColorClaveJuego => $colorClaveJuego){
                if($colorJugada == ($colorClaveJuego??null)){
                    $posicionesBlancas[] = $claveColorJugada;
                    $claveJuego[$claveColorClaveJuego] = null;
                }
            }
        }

        $this->posiciones = [$posicionesNegras, $posicionesBlancas];
    }
}
?>