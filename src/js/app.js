document.addEventListener("DOMContentLoaded", () => {
  // selectores de los colores
  const colorButtons = document.querySelectorAll(".color-btn");
  const previews = document.querySelectorAll(".cambio-bg");
  // selectores de los svg
  const svgThumbs = document.querySelectorAll(".svg-img");
  const svgMain = document.getElementById("svg-main");
  // selectores de los inputs
  //Seleccion de inputs
  const informacionLlavero = document.querySelector(".informacion-llavero");
  const inputs = informacionLlavero.querySelectorAll("input");
  const textoInsertar = document.querySelectorAll(".texto-insertar p");
  //Seleccion de color
  colorButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      const color = button.dataset.color;
      previews.forEach((preview) => {
        preview.style.background = color;
      });
    });
  });
  //Seleccion de svg
  svgThumbs.forEach((thumb) => {
    thumb.addEventListener("click", () => {
      svgMain.src = thumb.dataset.src;
    });
  });
  //Inserta el texto
  inputs.forEach((input, i) => {
    input.addEventListener("input", (e) => {
      textoInsertar[i].innerText = e.target.value;
    });
  });
});
