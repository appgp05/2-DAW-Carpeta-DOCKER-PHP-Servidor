<?php
    class ExpresionRegular {
        public static function comprobar(String $expresionRegular, String $texto)
        {
            $cantidad = 0;
            var_dump($cantidad);
            if(preg_match_all("#$expresionRegular#", $texto, $cantidad)){
                var_dump($cantidad);
                return "<p style='color: green'>Cumple la expresión regular</p>";
            } else {
                return "<p style='color: red'>No cumple la expresión regular</p>";
            }
        }
    }
?>