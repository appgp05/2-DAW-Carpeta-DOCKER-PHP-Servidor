<?php
    abstract class Operacion {
//        public static function comprobarErrores(String $operacion): String {
//            $error = "";
////            $error .= (str_contains($operacion, "/") && (!str_contains($operacion, "+") || !str_contains($operacion, "-") || !str_contains($operacion, ":")))
////                ? "<p class='destacado'>Está tratando de hacer una operación real con un numero racional</p>"
////                : "";
//            $error .= (str_contains($operacion, "/") && (!str_contains($operacion, "+") || !str_contains($operacion, "-") || !str_contains($operacion, ":")))
//                ? "<p class='destacado'>Está tratando de hacer una operación real con un numero racional</p>"
//                : "";
//
//            $error .= (true)
//                ? ""
//                : "";
//
//            return $error;
//        }

        public static function resolverTipo(String $textoOperacion): String{
            $patronNumeroReal = "\-?[0-9]([0-9]+)?(\.[0-9]+)?";
            $patronOperadorReal = "[+\-*\/]";
            $patronReal = "/^{$patronNumeroReal}{$patronOperadorReal}{$patronNumeroReal}$/";

            $patronNumeroRacional = "\-?[1-9]([0-9]+)?(\/[1-9]([0-9]+)?)?";
            $patronOperadorRacional = "[+\-*:]";
            $patronRacional = "/^{$patronNumeroRacional}{$patronOperadorRacional}{$patronNumeroRacional}$/";

            switch (true) {
                case preg_match($patronReal, $textoOperacion):
                    return "real";
                case preg_match($patronRacional, $textoOperacion):
                    return "racional";
                default:
                    return "error";
            }
        }

    }
?>