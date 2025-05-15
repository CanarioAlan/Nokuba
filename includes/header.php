<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nokuba</title>
    <link rel="stylesheet" href="dist/css/app.css">
</head>

<body>
    <header>
        <div class="contenido-centrado header">

            <a href="#"><img class="logo" src="src/img/logo.svg" alt="Logo"></a>

            <div class="header-links-buscador">
                <button><img src="src/img/iconos/lupa.svg" alt="Buscar"></button>
                <nav class="nav">
                    <button class="btn-menu"><img src="src/img/iconos/menu.svg" alt="Menu para desplegar"></button>
                    <button class="btn-menu x"><img src="src/img/iconos/x.svg" alt="Menu para cerrar"></button>
                    <?php include 'includes/navegacion.php'; ?>
                </nav>
            </div>
            <button class="btn-carrito"><img src="src/img/iconos/carrito.svg" alt="Carrito"></button>

        </div>
    </header>