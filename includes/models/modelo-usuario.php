<?php

$accion = $_POST['accion'];
$password = $_POST['password'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];

//Crear usuario
if($accion === 'crear'){
    //Codigo para crear usuarios

    //Hashear passwords
    $opciones = array(
        'cost' => 12
    );

    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);

    //importamos la conexion
    include '../functions/conexion.php';

    try {
        //Realizar consulta a base de datos
        $stmt = $conexion->prepare(" INSERT INTO usuarios (usuario, email, password) VALUES (?, ?, ?) ");
        $stmt->bind_param('sss', $usuario, $email, $hash_password);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tipo' => $accion,
                'usuario' => $usuario
            );
        }else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conexion->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}

//Logear Usuario
if($accion === 'login'){
    //Escribir el codigo que loguee a los usuarios

    include '../functions/conexion.php';

    try {
        //Seleccionamos el usuario de la base de datos
        $stmt = $conexion->prepare("SELECT usuario, id, password FROM usuarios WHERE usuario = ?");
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        //Loguear el usuario
        $stmt->bind_result($nombre_usuario, $id_usuario, $pass_usuario);
        $stmt->fetch();
        if($nombre_usuario){
            //El usuario existe, verificar el password
            if(password_verify($password, $pass_usuario)){
                session_start();
                $_SESSION['nombre'] = $usuario;
                $_SESSION['id'] = $id_usuario;
                $_SESSION['login'] = true;
                //El login es correcto
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'nombre' => $nombre_usuario,
                    'tipo' => $accion
                );
            }else{
                //Login incorrecto
                $respuesta = array(
                    'resultado' => 'Password incorrecto'
                );
            }
        }else{
            $respuesta = array(
                'resultado' => 'Usuario inexistente'
            );
        }
        $stmt->close();
        $conexion->close();
    } catch (Exception $e) {
        $respuesta = array (
            'respuesta' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}

