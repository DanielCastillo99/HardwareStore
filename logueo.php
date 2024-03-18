<!DOCTYPE html>
<html lang="es">
<head>
    <title>Hardware Store Adso</title>
    <link rel="stylesheet" href="CSS/Estilos.css">
</head>
<body>
    <header class="Inicio">
        <div class="cabeza">
            <div class="cabeza__logo">
                <a href="logueo.php"><img src="./IMAGENES/LOGO.png" alt="Logo Empresa"></a>
            </div>
            <div class="cabeza__titulo">
                <h1>Hardware Store Adso</h1>
            </div>
        </div>
    </header> 
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-loguear">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar a la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-registro">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrar para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__logueo-registro">

                <form action="./USUARIO/index.php" class="formulario__logueo">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <form action="../BASE_DE_DATOS/registro_usuario_be.php" class="formulario__registro" method="POST">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/Script.js"></script>
</body>
</html>