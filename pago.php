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

                                    <a href="#" id="pagar" class="button u-full-width pagar">Pagar</a>
                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    </header>

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

    <div class="container contenedor-principal">
            <div class="formulario">
                <h2>Ingrese sus datos de envio</h2>
                <form action="#" class="datos-envio">
                    <input type="text" placeholder="Nombre Completo">
                    <input type="text" placeholder="Dirección">
                    <input type="text" placeholder="Codigo Postal">
                    <input type="text" placeholder="Estado/Provincia/Región">
                    <input type="text" placeholder="Ciudad">
                    <input type="text" placeholder="Colonia">
                    <input type="tel" placeholder="Número Teléfonico">
                    <select name="paqueteria" id="paqueteria">
                        <option disabled selected>-- Seleccione una paqueteria --</option>
                        <option value="fedex">Fedex - $119</option>
                        <option value="dhl">DHL - $149</option>
                        <option value="ups">UPS - $199</option>
                    </select>
                </form>
                <h2>Recomendado para ti</h2>
                <div class="wrapper">   
                    <div id="slider4" class="">
                        <div class="slide">
                            <img src="img/libro11.jpg" alt="">
                            <h1>The House of<br>Dior</h1>
                            <p>Christian Dior</p>
                        </div>
                        <div class="slide">
                            <img src="img/libro8.jpg" alt="">
                            <h1>Uncanny Valley</h1>
                            <p><br>Anna Wiener</p>
                        </div>
                        <div class="slide">
                            <img src="img/libro4.jpg" alt="">
                            <h1>To Kill A<br>Mockingbird</h1>
                            <p>Harper Lee</p>
                        </div>
                        <div class="slide">
                            <img src="img/libro12.png" alt="">
                            <h1>Moby Dick</h1>
                            <p><br>Herman Merville</p>
                        </div>
                        <div class="slide">
                            <img src="img/libro2.jpg" alt="">
                            <h1>Harry Potter</h1>
                            <p><br>J.K. Rowling</p>
                        </div>  
                        <div class="slide">
                            <img src="img/libro9.jpg" alt="">
                            <h1>Writers & Lovers</h1>
                            <p><br>Lily King</p>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="detalles">
                <table id="lista-compra" class="detalle">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="detalle" id="total">
                    <h2>Total: $260</h2>
                </div>
                <div class="detalle borde-top">
                    <p>Metodo de pago</p>
                    <form action="#" class="datos-pago">
                        <input type="text" placeholder="Numero de Tarjeta">
                        <input type="text" placeholder="Nombre en la Tarjeta">
                        <label>Fecha de Vencimiento</label>
                        <input type="date" placeholder="Fecha de Vencimiento">
                        <button class="btnVerde">Pagar</button>
                        <button class="btnPaypal">Pagar con Paypal</button>
                    </form>
                </div>
            </div>
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

    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="js/pago.js"></script>

</body>
</html>