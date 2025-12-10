<?php
namespace clases;

class Plantilla {
    public static function mostrarFormularioAcciones($botonMostrarClave): string {
        $html = "";

        $html .= "<form method='post' action='index.php' id='accionesPosibles'>";
        $html .= "<legend>Acciones posibles</legend>";
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

        $html .= $mensaje;

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
    public static function mostrarClave(): string{
        $colores = $_SESSION["clave"];

        $html = "";

        $html .= "<div>";
        $html .= "<h2>Clave</h2>";
        $html .= "<div class='colores'>";
        forEach($colores as $clave => $valor){
            $html .= "<p class='color$valor'>$valor</p>";
        }
        $html .= "</div>";
        $html .= "</div>";

        return $html;
    }
    public static function mostrarJugadasAnterioresYActual(): string {
        $jugadas = $_SESSION["jugadas"]??[];

        $jugadas = array_reverse($jugadas);

        $html = "";

        $html .= "<div id='infoJugadaActual'>";
        if(sizeof($jugadas) > 0){
            $html .= "<p class='mensajeInfo'>Jugada actual ".sizeof($jugadas)."</p>";
            $html .= "<p class='mensajeInfo'>Resultado: ".sizeof($jugadas[0]->getPosiciones()[0])." colores y ".sizeof($jugadas[0]->getPosiciones()[1])." posiciones</p>";
        } else {
            $html .= "<p class='mensajeInfo'>No hay jugadas</p>";
        }

        $html .= self::mostrarJugadasAnteriores();

        return $html;
    }


    public static function mostrarJugadasAnteriores(): string{
        $jugadas = $_SESSION["jugadas"]??[];

        $html = "";

        $html .= "<div id='jugadas'>";

        $html .= "<h2>Histórico de jugadas</h2>";

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

    public static function mostrarResultadoPartida(): string{
        $html = "";

        $html .= "<h1>Resultado de tu partida</h1>";
        $html .= "<div id='resultadoPartida'>";
        $html .= "<h2>Felicidades adivinaste la clave en ".sizeof($_SESSION['jugadas'])." jugadas</h2>";
        $html .= self::mostrarClave();
        $html .= self::mostrarJugadasAnteriores();


        return $html;
    }
}

?>
