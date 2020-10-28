<?php

//Obtener el catalogo
function obtenerCatalogo(){
    include 'conexion.php';

    try {
        return $conexion->query(" SELECT id, nombre FROM catalogo ");
    } catch (Exception $e) {
        echo "Error ! : " . $e->getMessage();
        return false;
    }
}

function obtenerDetalleCatalogo($id = NULL){
    include 'conexion.php';

    try {
        return $conexion->query(" SELECT id, nombre, autor, precio_real, precio_descuento, imagen WHERE id = {$id} ");
    } catch (Exception $e) {
        echo "Error ! : " . $e->getMessage();
        return false;
    }
}

?>