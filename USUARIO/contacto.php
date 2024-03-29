<?php
require 'includes/.env';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware Store Adso</title>
    <link rel="stylesheet" href="../CSS/Estilos.css">
</head>
<body>
    <header class="Inicio">
        <div class="cabeza">
            <div class="cabeza__logo">
                <a href="index.php"><img src="../IMAGENES/LOGO.png" alt="Logo Empresa"></a>
            </div>
            <div class="cabeza__titulo">
                <h1>Hardware Store Adso</h1>
            </div>
            <div class="cabeza__opciones">
                <div class="cabeza__carrito">
                    <a href="carrito.php"><img src="../IMAGENES/carrito-de-compras.png" alt="Logo carrito"></a>
                </div>
                <div class="cabeza__registro">
                    <a href="logueo.php"><img src="../IMAGENES/Usuario.png" alt="Logo ususario"></a>
                </div>
            </div>
        </div>
    </header>
    </nav>

    <!-- CODIGO TRAIDO -->
    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="">
        </picture>
        <h2>Llene el Formulario de Contacto</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">
                <label for="email">E-Mail</label>
                <input type="email" placeholder="Tu E-Mail" id="email">
                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu Telefono" id="telefono">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    <label for="contactar-email">E-Mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligio telefono, elija la fecha y la hora para ser contactado</p>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton">
        </form>
    </main>
<script src="build/js/bundle.min.js"></script>
    <!-- CODIGO TRAIDO -->
    <footer class="PiePagina">
        <div class="Pie">
            <div class="pie__logo">
                <a href=""><img src="../IMAGENES/LOGO.png" alt="Logo Empresa"></a>
            </div>
            <div class="pie__titulo">
                <h1>Hardware Store Adso <span>Todos los derechos reservados</span></h1>
            </div>
            <div class="pie__contacto">
                <a href="#"><img src="../IMAGENES/Instagram.png" alt="Logo Instagram"></a>
                <a href="#"><img src="../IMAGENES/Facebook.png" alt="Logo Facebook"></a>
                <a href="#"><img src="../IMAGENES/whatsapp.png" alt="Logo Whatsapp"></a>
            </div>
        </div>
    </footer>
</body>
</html>