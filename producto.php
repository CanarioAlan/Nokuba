<?php include 'includes/header.php'; ?>
<main class="contenido-centrado producto">
    <section class="img-producto">
        <div class="img-fondo">
            <div class="contenedor-svg cambio-bg svg-previw" id="insertar-img">
                <img src="src/img/svg/1.svg" alt="svg seleccionado" id="svg-main">
            </div>
            <div class="contenedor-svg cambio-bg" id="insertar-text">
                <div class="texto-insertar">
                    <p class="salida" id="nombre-mascota"></p>
                    <p class="salida" id="nombre-propietario"></p>
                    <p class="salida" id="telefono-propietario"></p>
                </div>
            </div>
        </div>
    </section>
    <section class="informacion-general">
        <h2>Tag de perro premium</h2>
        <p class="precio">12000</p>
        <p>Imprimimos su pedido de 1 a 3 dias hábiles</p>

        <div class="form-etiqueta-perro">
            <h3>Crear y previsualizar su etiqueta de perro</h3>
            <form action="">
                <div class="form-border color-llavero">
                    <div class="imagenes">
                        <h3>Selecciona la Imagen</h3>
                        <div class="imagenes-galeria">
                            <img src="src/img/svg/1.svg" class="svg-img" data-src="src/img/svg/1.svg" alt="">
                            <img src="src/img/svg/2.svg" class="svg-img" data-src="src/img/svg/2.svg" alt="">
                            <img src="src/img/svg/3.svg" class="svg-img" data-src="src/img/svg/3.svg" alt="">
                            <img src="src/img/svg/4.svg" class="svg-img" data-src="src/img/svg/4.svg" alt="">
                            <img src="src/img/svg/5.svg" class="svg-img" data-src="src/img/svg/5.svg" alt="">
                            <img src="src/img/svg/6.svg" class="svg-img" data-src="src/img/svg/6.svg" alt="">
                            <img src="src/img/svg/7.svg" class="svg-img" data-src="src/img/svg/7.svg" alt="">
                            <img src="src/img/svg/8.svg" class="svg-img" data-src="src/img/svg/8.svg" alt="">
                            <img src="src/img/svg/9.svg" class="svg-img" data-src="src/img/svg/9.svg" alt="">
                        </div>
                    </div>
                    <h3>Color de la etiqueta</h3>
                    <div class="color-seleccionado">
                        <button class="color-btn" data-color="#000000" style="background-color: #000000;">Negro</button>
                        <button class="color-btn" data-color="#FFFFFF" style="background-color: #FFFFFF;">Blanco</button>
                        <button class="color-btn" data-color="#FF0000" style="background-color: #FF0000;">Rojo</button>
                        <button class="color-btn" data-color="#00FF00" style="background-color: #00FF00;">Verde</button>
                        <button class="color-btn" data-color="#0000FF" style="background-color: #0000FF;">Azul</button>
                        <button class="color-btn" data-color="#FF6A00" style="background-color: #FF6A00;">Naranja</button>
                        <button class="color-btn" data-color="#FFB6C1" style="background-color: #FFB6C1;">Rosado</button>
                        <button class="color-btn" data-color="radial-gradient(circle,rgba(63, 94, 251, 1) 0%, rgba(252, 70, 107, 1) 100%)" style="background: radial-gradient(circle,rgba(63, 94, 251, 1) 0%, rgba(252, 70, 107, 1) 100%);">Degradado</button>
                        <button class="color-btn" data-color="linear-gradient(0deg,rgba(255, 255, 255, 1) 0%, rgba(203, 203, 203, 1) 52%, rgba(132, 132, 132, 1) 54%, rgba(0, 0, 0, 1) 100%)" style="background: linear-gradient(0deg,rgba(255, 255, 255, 1) 0%, rgba(203, 203, 203, 1) 52%, rgba(132, 132, 132, 1) 54%, rgba(0, 0, 0, 1) 100%);">Degradado</button>
                    </div>
                </div>

                <div class="form-border informacion-llavero">
                    <h3>Añade tu texto</h3>
                    <input type="text" placeholder="Nombre de la mascota" id="nombre-mascota">
                    <input type="text" placeholder="Nombre del propietario" id="nombre-propietario">
                    <input type="tel" placeholder="Telefono del propietario" id="telefono-propietario">
                </div>
                <div class="form-border tamaño-llavero">
                    <h3>Tamaño de la etiqueta</h3>
                    <button class="tamano-boton" data-tamano="regular">Tag de perro premium regular</button>
                    <button class="tamano-boton" data-tamano="mini">Mini Premium Dog Tag</button>
                    <button class="tamano-boton" data-tamano="extra_grande">Tag de perro premium extra grande</button>
                </div>
                <button type="submit" class="boton-envio">Generar etiqueta</button>
            </form>
        </div>
        <div class="descripcion-etiqueta-perro">
            <h3>Descripcion</h3>
            <p>Buscando la etiqueta de perro personalizada perfecta para tu mascota? A ti y a tu amigo les encantarán nuestras lindas y coloridas Etiquetas de Perro Premium.
                Estas etiquetas de mascotas hechas en Australia están recubiertas de resina, dándoles un acabado de larga duración, súper brillante que es súper fácil de limpiar. Además, están disponibles en tallas de 3 tallas para adaptarse a cada mascota, desde los pupperinos más pequeños hasta los más grandes chancicos.
                Personalice su etiqueta de perro Premium ahora con 100s de diseños lindos y colores vibrantes para elegir. No sólo estos se verán adorables en tu perro durante años, también los mantendrán a salvo en caso de que se vayan</p>
        </div>
    </section>
    <section class="accesorios-recomendados">
        <h2>Recomendado para usted</h2>
        <section class="accesorios-index">
            <h2>Accesorios</h2>
            <div class="accesorios-index-contenido">
                <a href="productos.php" class="cards cards-accesorios">
                    <img src="src/img/producto-1.jpg" alt="Accesorio">
                    <p>Accesorio 1</p>
                </a>
                <a href="#" class="cards cards-accesorios">
                    <img src="src/img/producto-2.jpg" alt="Accesorio">
                    <p>Accesorio 2</p>
                </a>
                <a href="#" class="cards cards-accesorios">
                    <img src="src/img/producto-3.jpg" alt="Accesorio">
                    <p>Accesorio 3</p>
                </a>
            </div>
        </section>
    </section>
</main>

<?php include 'includes/footer.php'; ?>