<?php 
        //Obtiene el catalogo
        try {
            require_once('includes/functions/conexion.php');
            $sql = " SELECT * FROM catalogo ";
            $resultado = $conexion->query($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        
?>
<div class="tres-columnas" id="catalogo">   
    <?php while($libros = $resultado->fetch_assoc()){ ?>
                <div class="card" id="<?php echo $libros['id'] ?>">
                    <img src="<?php echo $libros['imagen']; ?>" class="imagen-libro u-full-width">
                    <div class="info-card">
                        <h4><?php echo $libros['nombre']; ?></h4>
                        <p><?php echo $libros['autor']; ?></p>
                        <img src="img/estrellas.png">
                        <p class="precio">$<?php echo $libros['precio_real']; ?> <span class="u-pull-right ">$<span class="precioNum"><?php echo $libros['precio_descuento']; ?></span></span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="<?php echo $libros['id'] ?>">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
    <?php } ?>
</div> <!--.row-->

<?php
    $conexion->close();
?>