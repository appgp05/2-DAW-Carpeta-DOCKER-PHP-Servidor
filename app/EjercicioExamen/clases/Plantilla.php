<?php
namespace clases;

class Plantilla {
    //TODO cambiar actions formularios

    public static function mostrarFormularioAcciones(): string {
        $html = "";

        $html .= "<form method='post' action='index.php'>";
        $html .= "<input type='submit' name='submit' value='Mostrar Clave'>";
        $html .= "<input type='submit' name='submit' value='Resetear la Clave'>";
        $html .= "</form>";

        return $html;
    }

    public static function mostrarFormularioJugar(array $colores): string
    {
        $html = "";

        $html .= "<form method='post' action='index.php'>";

        for($i = 0; $i < 4; ++$i){
            $html .= "<select name='colores[]'>";

            $html .= "<option selected hidden>Colores</option>";

            forEach($colores as $clave => $valor){
                $html .= "<option value='$valor[0]' style='background-color: $valor[1]'>$valor[0]</option>";
            }
            $html .= "</select>";
        }

        $html .= "</form>";

        return $html;
    }
}

?>
