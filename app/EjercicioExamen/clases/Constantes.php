<?php
namespace clases;
class Constantes{
    private static array $colores = [
        "Azul",
        "Rojo",
        "Naranja",
        "Verde",
        "Violeta",
        "Amarillo",
        "Marrón",
        "Rosa"
    ];

    public static function obtenerColores(): array{
        return self::$colores;
    }
}
?>