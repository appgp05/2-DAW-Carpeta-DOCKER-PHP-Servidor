<?php
namespace clases;

class Plantilla {
    //TODO cambiar actions formularios

    public static function mostrarColores($colores): string{
        $html = "";

        $html .= "<div class='colores'>";
        forEach($colores as $clave => $valor){
            $html .= "<p style='background-color: $valor[1]; color: white'>$valor[0]</p>";
        }
        $html .= "</div>";

        return $html;
    }

    public static function mostrarJugadasAnteriores(array $jugadas): string {
        $html = "";

        $html .= "<div class='jugadas'>";

        forEach($jugadas as $claveJugada => $jugada){
            $html .= "<div class='jugada'>";

            $coloresJugada = $jugada->getCombinacionColores();
            $html .= "<p>".$coloresJugada[0][0]."</p>";
            $html .= "<p>".$coloresJugada[1][0]."</p>";
            $html .= "<p>".$coloresJugada[2][0]."</p>";
            $html .= "<p>".$coloresJugada[3][0]."</p>";

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

    public static function mostrarFormularioJugar(array $coloresJugadaAnterior): string {
        $colores = Colores::obtenerColores();
        $html = "";

        $html .= "<form method='post' action='index.php'>";

        for($i = 0; $i < 4; ++$i){
            $html .= "<select name='colores[]'>";

            $html .= "<option selected hidden>Colores</option>";

            forEach($colores as $clave => $valor){
                $html .= "<option value='$valor[0]' style='background-color: $valor[1]; color: white'".(($valor[0] == ($coloresJugadaAnterior[$i]??null))?"selected":"").">$valor[0]</option>";
            }
            $html .= "</select>";
        }

        $html .= "<input type='submit' name='submit' value='Jugar'>";

        $html .= "</form>";

        return $html;
    }
}

?>
