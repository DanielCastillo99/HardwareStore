<?php
    //Importar base de datos
    require '../BD/conexion_be.php';
    require '../Includes/.env';
    $db = conectarBD();
    
    //Esccribir el query
    $query = "SELECT * FROM producto";
    
    //Consultar la BD
    $resultadoConsulta = mysqli_query ($db, $query);
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

    <!-- CODIGO COPIADO -->
    <main class="contenedor seccion">
        <h1>Productos</h1>
        <div class="contenedor-anuncios">
        <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
            <div class="anuncio">
                <div class="imagenpr">
                    <img loading="lazy" src="../IMAGENES/Productos/<?php echo $propiedad['imagen'] ?>" alt="anuncio1">
                </div>
                <div class="contenido-anuncio">
                    <h3><?php echo $propiedad['nombre'] ?></h3>
                    <p><?php echo $propiedad['descripcion'] ?></p>
                    <p class="precio">$<?php echo $propiedad['precio'] ?></p>                  
                    <a href="anuncio.php" class="boton boton-amarillo-block">
                        Comprar
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->
            <?php endwhile;?>



        </div><!--contenedor-anuncios-->
    </main>
    <!-- FIN DEL CODIGO COPIADO -->

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