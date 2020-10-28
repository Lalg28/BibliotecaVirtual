<?php 
    include 'includes/functions/sesiones.php';
    include 'includes/functions/funciones.php';

    if(isset($_GET['id_libro'])){
        $id_libro = $_GET['id_libro'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca Virtual</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
</head>


<body>
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="four columns">
                <div class="logo">
                    <a href="index.php" style="text-decoration: none"><h1>Biblioteca<span>Virtual</span></h1></a>
                </div>
            </div>
            <div class="two columns u-pull-right">
                <a href="login.php?cerrar_sesion=true" class="cerrar-sesion">Cerrar Sesion</a>
            </div>
            <div class="u-pull-right">
                <h5 class="line"> | </h5>
            </div>
            <div class="one columns u-pull-right">
                <ul>
                    <li class="submenu">
                            <a id="img-carrito" class="icono-carrito"><i class="fas fa-shopping-basket"></i></a>
                            <div id="carrito">
                                    
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="pago.php" id="pagar" class="button u-full-width pagar">Pagar</a>
                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    </header>


    <div id="hero">
        <div class="container">
            <div class="row">
                    <div class="six columns">
                        <div class="contenido-hero">
                                <h2>Lee algo nuevo</h2>
                                <p>Nunca es tarde para conocer nuevos mundos</p>
                                <form action="#" id="busqueda" method="post" class="formulario">
                                    <input class="u-full-width" type="text" placeholder="¿Que te gustaría leer?" id="buscador">
                                    <input type="submit" id="submit-buscador" class="submit-buscador">
                                </form>
                        </div>
                    </div>
            </div> 
        </div>
    </div>

    <div class="barra">
        <div class="container">
            <div class="row">
                    <div class="four columns icono icono1">
                        <p>Aprende algo nuevo<br>
                        Explora  nuestro amplio catálogo</p>
                    </div>
                    <div class="four columns icono icono2">
                        <p>Los mejores autores <br>
                        Disfruta con distintos estilos</p>
                    </div>
                    <div class="four columns icono icono3">
                        <p>Rapido y seguro<br>
                        Leer nunca había sido tan rapido</p>
                    </div>
            </div>
        </div>
    </div>



    <div id="lista-cursos" class="container">
        <h1 id="encabezado" class="encabezado">Libros Disponibles</h1>
        
        <?php include 'includes/templates/catalogo-template.php' ?>

    </div>  

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                    <div class="four columns">
                            <nav id="principal" class="menu">
                                <a class="enlace" href="#">Para tu Negocio</a>
                                <a class="enlace" href="#">Aplicación Móviles</a>
                                <a class="enlace" href="#">Soporte</a>
                            </nav>
                    </div>
                    <div class="four columns">
                            <nav id="secundaria" class="menu">
                                <a class="enlace" href="#">¿Quienes Somos?</a>
                                <a class="enlace" href="#">Aviso de Privacidad</a>
                                <a class="enlace" href="#">Politicas de Compra</a>
                            </nav>
                    </div>
                    <div class="four columns">
                        <h2 class="redes-sociales-titulo">Redes Sociales</h2>
                        <nav id="secundaria" class="redes-sociales">
                            <a class="iconos" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="iconos" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="iconos" href="#"><i class="fab fa-twitter"></i></a>
                        </nav>
                </div>
                    
            </div>
        </div>
    </footer>

    <script src="js/app.js"></script>

</body>
</html>