<footer>
    <div class="contenido-centrado contenido-footer">
        <section class="redes">
            <h2>¿Quieres compartir tus fotos? Etiquetanos</h2>
            <div class="redes-iconos">
                <a href="#"><img src="src/img/iconos/instagram.svg" alt="Instagram"></a>
                <a href="#"><img src="src/img/iconos/facebook.svg" alt="Facebook"></a>
            </div>
        </section>
        <section class="suscripcion">
            <form action="#" class="form-suscripcion">
                <input type="email" placeholder="Tu correo electrónico" class="email-suscripcion">
                <button type="submit" class="btn">Suscribete</button>
            </form>
        </section>
        <section class="logo-footer">
            <div class="contenedor-logo">
                <a href="#"><img src="src/img/logo.svg" alt="Logo"></a>
                <div class="iconos-logo">
                    <a href="#"><img src="src/img/iconos/instagram.svg" alt="Instagram"></a>
                    <a href="#"><img src="src/img/iconos/facebook.svg" alt="Facebook"></a>
                </div>
            </div>
        </section>
        <section class="menu-footer">
            <h3>Atención al cliente</h3>
            <div class="menu-navegacion">
                <?php include 'includes/navegacion.php'; ?>
            </div>
            <div class="menu-atencion">
                <div class="menu-atencion-links">
                    <a href="#">Envio y entrega</a>
                    <a href="#">Devoluciones y cambios</a>
                    <a href="#">Métodos de pago</a>
                    <a href="#">Preguntas Frecuentes</a>
                </div>
            </div>
        </section>
        <section class="entrega">
            <div class="tiempo-entrega">
                <h3>El Tiempo de entrega</h3>
                <div class="tiempo-entrega-iconos">
                    <div class="icono">
                        <img src="src/img/iconos/produccion.svg" alt="icono de produccion">
                        <p>Producción <br> 1 a 3 dias</p>
                    </div>
                    <div class="iconos-decorativo">
                        <img src="src/img/iconos/mas.svg" alt="icono de mas">
                    </div>
                    <div class="icono">
                        <img src="src/img/iconos/envio.svg" alt="icono de envio">
                        <p>Envio</p>
                    </div>
                    <div class="iconos-decorativo">
                        <img src="src/img/iconos/igual.svg" alt="icono de mas">
                    </div>
                    <div class="icono">
                        <img src="src/img/iconos/house.svg" alt="icono de entrega">
                        <p>Entrega</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyright">
            <p>&copy;Copyright <?php echo date('Y'); ?> Nokuba</p>
        </section>
    </div>
</footer>
</body>

</html>