<?php
    class Plantilla {
        public static function mostrarFormularioColores(array $colores): string {
            $html = "";

            $html .= "<form>";
            $html .= "<select name='colores[]'>";
            $html .= "<option value=''>Seleccione</option>";
            $html .= "</select>";
            $html .= "</form>";

            return $html;
        }
    }
?>
