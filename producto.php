<?php include 'includes/header.php'; ?>
<main class="contenido-centrado producto">
    <section class="img-producto">
        <?php include 'includes/imagenes.php'; ?>
    </section>
    <section class="informacion-general">
        <h2>Tag de perro premium</h2>
        <p class="precio">12000</p>
        <p>Imprimimos su pedido de 1 a 3 dias hábiles</p>
        <div class="form-etiqueta-perro">
            <h3>Crear y previsualizar su etiqueta de perro</h3>
            <form action="">
                <div class="form-border color-llavero">
                    <h3>Color de la etiqueta</h3>
                    <div class="carousel-color">
                        <div class="color-contenedor negro" data-color="#000000" data-name="Color negro" id="color-1">
                            <p class="color-contenedor-texto">Color negro</p>
                        </div>
                        <div class="color-contenedor rosa" data-color="#FFB6C1" data-name="Color rosa" id="color-2">
                            <p class="color-contenedor-texto">Color rosa</p>
                        </div>
                        <div class="color-contenedor naranja" data-color="#FF6A00" data-name="Color naranja" id="color-3">
                            <p class="color-contenedor-texto">Color naranja</p>
                        </div>
                        <div class="color-contenedor verde" data-color="#008000" data-name="Color verde" id="color-4">
                            <p class="color-contenedor-texto">Color verde</p>
                        </div>
                        <div class="color-contenedor amarillo" data-color="#FFD700" data-name="Color amarillo" id="color-5">
                            <p class="color-contenedor-texto">Color amarillo</p>
                        </div>
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