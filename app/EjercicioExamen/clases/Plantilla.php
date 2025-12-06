<?php
namespace clases;

class Plantilla {
    public static function mostrarFormularioAcciones($botonMostrarClave): string {
        $html = "";

        $html .= "<form method='post' action='index.php' id='accionesPosibles'>";
        if($botonMostrarClave){
            $html .= "<input type='submit' name='submit' value='Mostrar Clave'>";
        } else {
            $html .= "<input type='submit' name='submit' value='Ocultar Clave'>";
        }
        $html .= "<input type='submit' name='submit' value='Resetear la Clave'>";
        $html .= "</form>";

        return $html;
    }
    public static function mostrarFormularioJugar(array $coloresJugadaAnterior, string $mensaje): string {
        $colores = Colores::obtenerColores();
        $html = "";

        $html .= "<form method='post' action='index.php' id='menuJugar'>";

        $html .= "<p id='mensaje'>$mensaje</p>";

        $html .= "<div id='selectsColores'>";
        for($i = 0; $i < 4; ++$i){
            $html .= "<select name='colores[]'>";

            $html .= "<option selected hidden>Colores</option>";

            forEach($colores as $claveColor => $color){
                $html .= "<option value='$color' class='color$color'".(($color == ($coloresJugadaAnterior[$i]??null))?"selected":"").">$color</option>";
            }
            $html .= "</select>";
        }
        $html .= "</div>";

        $html .= "<input type='submit' name='submit' value='Jugar'>";

        $html .= "</form>";

        return $html;
    }
    public static function mostrarColoresClave($colores): string{
        $html = "";

        $html .= "<div>";
        $html .= "<p>Clave Actual</p>";
        $html .= "<div class='colores'>";
        forEach($colores as $clave => $valor){
            $html .= "<p class='color$valor'>$valor</p>";
        }
        $html .= "</div>";
        $html .= "</div>";

        return $html;
    }
    public static function mostrarJugadasAnteriores(array $jugadas): string {
        $jugadas = array_reverse($jugadas);

        $html = "";
        $html .= "<div class='jugadas'>";

        $html .= "<p>Jugada actual ".sizeof($jugadas)."</p>";
        $html .= "<p>Resultado: ".sizeof(array_reverse($jugadas)[0]->getPosiciones()[0])." colores y posiciones</p>";


        forEach($jugadas as $claveJugada => $jugada){
            $html .= "<div class='jugada'>";

            $html .= "<p class='textoJugada'>Valor de la jugada ".$jugada->getNumero()."</p>";

            $html .= "<div class='informacionJugada'>";
            $html .= "<div class='posiciones'>";

            forEach($jugada->getPosiciones()[0] as $clave => $valor){
                $html .= "<p class='posicionNegra'>$clave</p>";
            }
            forEach($jugada->getPosiciones()[1] as $clave => $valor){
                $html .= "<p class='posicionBlanca'>$clave</p>";
            }

            $html .= "</div>";

            $html .= "<div class='colores'>";

            $coloresJugada = $jugada->getCombinacionColores();
            $html .= "<p class='color".$coloresJugada[0]."'>".$coloresJugada[0]."</p>";
            $html .= "<p class='color".$coloresJugada[1]."'>".$coloresJugada[1]."</p>";
            $html .= "<p class='color".$coloresJugada[2]."'>".$coloresJugada[2]."</p>";
            $html .= "<p class='color".$coloresJugada[3]."'>".$coloresJugada[3]."</p>";

            $html .= "</div>";

            $html .= "</div>";

            $html .= "</div>";
        }

        $html .= "</div>";

        return $html;
    }
}

?>
