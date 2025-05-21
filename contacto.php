<?php include 'includes/header.php'; ?>
<main class="contenido-centrado">
    <section class="contacto-section">
        <div class="contenedor-contacto">
            <div class="contacto-contenido-siber">
                <div class="contacto-texto">
                    <h2 class="contacto-titulo">¡Contáctanos!</h2>
                    <p class="contacto-descripcion">Si tienes alguna pregunta sobre nuestros diseños, quieres realizar un pedido especial o simplemente saludarnos, ¡no dudes en contactarnos!</p>
                </div>
            </div>
            <div class="contacto-formulario">
                <div class="contact-form-wrapper">
                    <h3 class="form-titulo">Envíanos un mensaje</h3>
                    <form class="contact-form" action="#" method="POST">
                        <div class="form-grupo">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="name" placeholder="Escribe tu nombre" required>
                        </div>
                        <div class="form-grupo">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" id="email" name="email" placeholder="Escribe tu correo electrónico" required>
                        </div>
                        <div class="form-grupo">
                            <label for="subject">Asunto (opcional):</label>
                            <input type="text" id="subject" name="subject" placeholder="Escribe el asunto">
                        </div>
                        <div class="form-grupo">
                            <label for="message">Mensaje:</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn-enviar">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>