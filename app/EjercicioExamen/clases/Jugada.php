<?php
namespace clases;
class Jugada {
    private array $posicciones = [];

    public function __construct(
        private int $numero,
        private array $combinacionColores,
    ){}

    public function getCombinacionColores(): array
    {
        return $this->combinacionColores;
    }
    public function comprobarJugada(): bool{
        if(array_find($this->combinacionColores, fn($color) => $color == "Colores") == null){
            forEach($this->combinacionColores as $clave => $valor){
                $todosLosColores = Colores::obtenerColores();

                $coloreCompleto = array_find($todosLosColores, fn($color) => $color[0] == $valor);

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
            var_dump($colorJugada[0]);
            var_dump($claveJuego[$claveColorJugada][0]);

            if($colorJugada[0] == ($claveJuego[$claveColorJugada][0]??null)){
                $posicionesNegras[] = $claveColorJugada;
                $claveJuego[$claveColorJugada] = null;
            } else {
                forEach($claveJuego as $claveColorClaveJuego => $colorClaveJuego){
                    if($colorJugada[0] == ($colorClaveJuego[0]??null)){
                        $posicionesBlancas[] = $claveColorJugada;
                        $claveJuego[$claveColorClaveJuego] = null;
                    }
                }
            }
        }

        var_dump([$posicionesNegras, $posicionesBlancas]);
    }
}
?>