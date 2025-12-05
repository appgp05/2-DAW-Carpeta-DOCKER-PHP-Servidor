<?php
namespace clases;
class Jugada {
    public function __construct(
        private int $numero,
        private array $combinacionColores
    ){
        $this->comprobarJugada();
    }

    public function comprobarJugada(): bool{
        if(array_find($this->combinacionColores, fn($color) => $color == "Colores") == null){
            forEach($this->combinacionColores as $clave => $valor){
                $todosLosColores = Colores::obtenerColores();

                $coloreCompleto = array_find($todosLosColores, fn($color) => $color[0] == $valor);

                $this->combinacionColores[$clave] = $coloreCompleto;
            }

            var_dump("true");
            return true;
        } else {
            var_dump("false");
            return false;
        }
    }
}
?>