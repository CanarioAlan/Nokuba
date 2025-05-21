document.addEventListener('DOMContentLoaded', () => {
    //envios popup
    const enviosBtn = document.getElementById('envios-btn');
    const cerrarBtn = document.getElementById('cerrar-btn');
    const envios = document.querySelector('.envios');
    enviosBtn.addEventListener('click', () => {
        envios.classList.remove('invisible');
    });
    cerrarBtn.addEventListener('click', () => {
        envios.classList.add('invisible');
    });
    //menu pliegable
    const abrirMenuBtn = document.getElementById('abrir-menu');
    const cerrarMenuBtn = document.getElementById('cerrar-menu-btn');
    const menu = document.querySelector('.nav');
    abrirMenuBtn.addEventListener('click', () => {
        menu.classList.remove('invisible');
    });
    cerrarMenuBtn.addEventListener('click', () => {
        menu.classList.add('invisible');
    });
    //cambiar de color de fondo del svg
    const colores = document.querySelectorAll('.color-contenedor');
    colores.forEach(color => {
        color.addEventListener('click', (e) => {
            const colorSeleccionado = e.target.getAttribute('data-color');
            const svg = document.querySelectorAll('.contenedor-svg');
            svg.forEach((svg) => {
                svg.style.backgroundColor = colorSeleccionado;
            });
        });
    });
    //insertando el nombre
    const informacionLlavero = document.querySelector('.informacion-llavero');
    const inputs = informacionLlavero.querySelectorAll('input');
    const textoInsertar = document.querySelectorAll('.texto-insertar p');
    inputs.forEach((input, i) => {
        input.addEventListener('input', (e) => {
            textoInsertar[i].innerText = e.target.value;
        });
    });



});