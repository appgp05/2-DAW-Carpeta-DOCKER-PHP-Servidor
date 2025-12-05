<?php
namespace clases;
class Colores{
    private static array $colores = [
        ["Azul", "blue"],
        ["Rojo", "red"],
        ["Naranja", "orange"],
        ["Verde", "green"],
        ["Violeta", "violet"],
        ["Amarillo", "yellow"],
        ["Marrón", "brown"],
        ["Rosa", "pink"],
    ];

    public static function obtenerColores(): array{
        return self::$colores;
    }
}
?>