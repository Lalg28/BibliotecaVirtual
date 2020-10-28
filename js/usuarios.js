eventListeners();

function eventListeners() {
    document.querySelector('#formularioRegistro').addEventListener('click', registrarUsuario)
    document.querySelector('#formularioLogin').addEventListener('click', iniciarSesion)
}

//Registrar un usuario nuevo
function registrarUsuario(e){
    e.preventDefault()

    var usuario = document.querySelector('#usuarioRegistro').value,
        password = document.querySelector('#passwordRegistro').value,
        email = document.querySelector('#emailRegistro').value,
        tipo = document.querySelector('#tipoRegistro').value

    if(e.target.classList.contains('botonCrear')){

        if(usuario === '' || password === '' || email === ''){
            swal("Error!", "Todos los campos son obligatorios", "error");
        }else{
            //Todos los campos estan completos, mandamos a ejecutar ajax

            //Datos que se envian al servidor
            var datos = new FormData()
            datos.append('usuario', usuario)
            datos.append('password', password)
            datos.append('email', email)
            datos.append('accion', tipo)

            //crear llamado a Ajax
            var xhr = new XMLHttpRequest();

            //abrir la conexion
            xhr.open('POST', 'includes/models/modelo-usuario.php', true)

            //retorno de datos
            xhr.onload = function() {
                if(this.status === 200){
                    var respuesta = JSON.parse(xhr.responseText)
                    console.log(respuesta)
                    //Si la respuesta es correcta
                    if(respuesta.respuesta === 'correcto'){
                        //Se crea el usuario
                        if(respuesta.tipo === 'crear'){
                            swal("Usuario Creado!", "El usuario se creo correctamente", "success");
                        }
                    }
                }else{
                    swal("Error!", "Hubo un error...", "error");
                }
            }
        }
        //Enviar peticion
        xhr.send(datos)
    }
}

function iniciarSesion(e){
    e.preventDefault()

    var usuario = document.querySelector('#usuario').value,
        password = document.querySelector('#password').value,
        tipo = document.querySelector('#tipo').value

    if(e.target.classList.contains('botonLogin')){

        if(usuario === '' || password === ''){
            swal("Error!", "Todos los campos son obligatorios", "error");
        }else{
            //Todos los datos son ingresados
    
            //Datos que se envian al servidor
            var datos = new FormData()
            datos.append('usuario', usuario)
            datos.append('password', password),
            datos.append('accion', tipo)
    
            //Crear llamado a AJAX
            var xhr = new XMLHttpRequest();
            
            //Abrir la conexion
            xhr.open('POST', 'includes/models/modelo-usuario.php', true)
    
            //retorno de datos
            xhr.onload = function() {
                if(this.status === 200){
                    var respuesta = JSON.parse(xhr.responseText)
                    console.log(respuesta.respuesta)
                    //Si la respuesta es correcta
                    if(respuesta.respuesta === 'correcto'){
                        if(respuesta.tipo === 'login'){
                            window.location.href = 'index.php'
                        }
                    }
                }else{
                    console.log('Hubo un error')
                }
            }
        }
        //Enviar peticion
        xhr.send(datos)
    }
}