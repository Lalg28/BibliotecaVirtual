<?php 

    session_start();
    include 'inc/funciones/funciones.php';

    if(isset($_GET['cerrar_sesion'])){
        $_SESSION = array();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/login.css">

    <title>Iniciar Sesión</title>
</head>

<body>
    <div class="logo">
        <h1>Biblioteca<span>Virtual</span></h1>
    </div>
    <div class="container" id="container">

        <!-- REGISTRO DE USUARIO -->
        <div class="form-container sign-up-container">
            <form id="formularioRegistro" method="post">
                <h1>Crear Cuenta</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>O usa tu email para el registro</span>
                <input type="text" id="usuarioRegistro" name="usuario" placeholder="Nombre" />
                <input type="email" id="emailRegistro" name="email" placeholder="Email" />
                <input type="password" id="passwordRegistro" name="password" placeholder="Contraseña">
                <input type="hidden" id="tipoRegistro" value="crear">
                <button class="botonCrear" value="Crear cuenta">Registrarse</button>
            </form>
        </div>

        <!-- INICIO DE SESION -->
        <div class="form-container sign-in-container">
            <form id="formularioLogin" method="post">
                <h1>Iniciar Sesión</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>O usa tu cuenta</span>
                <input type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario">
                <input type="password" name="password" id="password" placeholder="Contraseña">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <input type="hidden" id="tipo" value="login">
                <button class="botonLogin" value="Iniciar Sesion">Iniciar Sesión</button>
                <a href="#" class="administrador">Soy administrador</a>
            </form>
        </div>

        <!-- Overlay -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido de nuevo!</h1>
                    <p>Para mantenerte conectado con nuestra libreria registrarte con tu información personal :)</p>
                    <button class="ghost" id="signIn">Iniciar Sesion</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hola, Amigo!</h1>
                    <p>Ingresa tu información y empieza a disfrutar de nuestro servicio</p>
                    <button class="ghost" id="signUp">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/login.js"></script>
    <script src="./js/usuarios.js"></script>
    <script src="./js/sweetalert2.all.min.js"></script>
</body>
</html>