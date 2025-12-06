let colores = [
    ["Azul", "blue"],
    ["Rojo", "red"],
    ["Naranja", "orange"],
    ["Verde", "green"],
    ["Violeta", "violet"],
    ["Amarillo", "yellow"],
    ["Marrón", "brown"],
    ["Rosa", "pink"],
];

addEventListener("DOMContentLoaded", () => {
    let coloresSeleccionados = document.getElementsByName("colores[]")

    for(let colorSeleccionado of coloresSeleccionados){
        cambiarColor(colorSeleccionado)

        colorSeleccionado.addEventListener("change", () => {
            cambiarColor(colorSeleccionado)
        })
    }
})

function cambiarColor(colorSeleccionado){
    for(let color of colores) {
        if (colorSeleccionado.value == color[0]) {
            colorSeleccionado.style.backgroundColor = color[1]
        }
    }
}