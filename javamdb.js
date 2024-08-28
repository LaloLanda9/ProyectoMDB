function showDiv(divNumber) {
    // Ocultar todos los divs
    const divs = document.querySelectorAll('.content-div');
    divs.forEach(div => div.classList.remove('active'));

    // Mostrar el div deseado
    const divToShow = document.getElementById('div' + divNumber);
    divToShow.classList.add('active');
}
function limpiarFormulario(event) {
    event.preventDefault();
    var formulario = document.getElementById('formulario');
    formulario.reset();
}