<?php include 'includes/header.php'; ?>
<main>
    <section>
        <img src="src/img/producto-1.jpg" alt="Accesorio">
    </section>
    <section>
        <h2>Tag de perro premium</h2>
        <p>12000</p>
        <p>Imprimimos su pedido de 1 a 3 dias hábiles</p>
        <div>
            <h3>Crear y previsualizar su etiqueta de perro</h3>
            <div class="form-infomacion-llavero">
                <h3>Añade tu texto</h3>
                <input type="text" placeholder="Nombre de la mascota">
                <input type="text" placeholder="Nombre del propietario">
                <input type="tel" placeholder="Telefono del propietario">
            </div>
            <div class="form-tamaño-llavero">
                <h3>Tamaño del llavero</h3>
                <div class="llavero">
                    <input type="radio" name="mini" id="mini">
                    <label for="mini">Mini</label>
                </div>
                <div class="llavero">
                    <input type="radio" name="regular" id="regular">
                    <label for="regular">Regular</label>
                </div>
                <div class="llavero">
                    <input type="radio" name="grande" id="grande">
                    <label for="grande">Grande</label>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>