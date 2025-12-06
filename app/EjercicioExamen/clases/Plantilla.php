<?php
namespace clases;

class Plantilla {
    public static function mostrarColores($colores): string{
        $html = "";

        $html .= "<div class='colores'>";
        forEach($colores as $clave => $valor){
            $html .= "<p class='color$valor'>$valor</p>";
        }
        $html .= "</div>";

        return $html;
    }

    public static function mostrarJugadasAnteriores(array $jugadas): string {
        $html = "";

        $html .= "<div class='jugadas'>";

        forEach($jugadas as $claveJugada => $jugada){
            $html .= "<div class='jugada'>";

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
        }

        $html .= "</div>";

        return $html;
    }

    public static function mostrarFormularioAcciones($botonMostrarClave): string {
        $html = "";

        $html .= "<form method='post' action='index.php'>";
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

        $html .= "<form method='post' action='index.php'>";

        $html .= "<p class='mensaje'>$mensaje</p>";

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
}

?>
