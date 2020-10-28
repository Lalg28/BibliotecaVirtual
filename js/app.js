//Variables
const carrito = document.querySelector('#carrito');
const listaCursos = document.querySelector('#lista-cursos');
const contenedorCarrito = document.querySelector('#lista-carrito tbody')
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito')
const inputBuscar = document.querySelector('#busqueda')
let articulosCarrito = []

cargarEventListeners()
function cargarEventListeners() {
    //Cuando agregas un curso presionando "Agregar al Carrito"
    listaCursos.addEventListener('click', agregarCurso)

    //Elimina cursos de carrito
    carrito.addEventListener('click', eliminarCurso)

    //Vaciar el carrito
    vaciarCarritoBtn.addEventListener('click', () => {
        articulosCarrito = [] //Resetamos el arreglo

        limpiarHTML() //Limpia el HTML
    })

    //Buscador
    inputBuscar.addEventListener('input', buscarLibros)
}

// ----- | Funciones | --------

//Agregar libro al carrito
function agregarCurso(e){
    e.preventDefault()

    if(e.target.classList.contains('agregar-carrito')){
        const cursoSeleccionado = e.target.parentElement.parentElement

        leerDatosCurso(cursoSeleccionado)
    }
}

//Elimina un curso del carrito
function eliminarCurso(e) {
    
    if(e.target.classList.contains('borrar-curso')){
        const cursoId = e.target.getAttribute('data-id')

        //Elimina el arreglo por el data-id
        articulosCarrito = articulosCarrito.filter(curso => curso.id !== cursoId)

        carritoHTML() //Iterar sobre el carrito y mostar su HTML
    }
}

//Lee el contendio del HTML al que le dimos click y extrae la información del curso
function leerDatosCurso(curso){
    
    //Crear objeto que obtenga la informacion de los cursos
    const infoCurso = {
        imagen: curso.querySelector('img').src,
        titulo: curso.querySelector('h4').textContent,
        precio: curso.querySelector('.precio .precioNum').textContent,
        id: curso.querySelector('a').getAttribute('data-id'),
        cantidad: 1,
        total: curso.querySelector('.precio .precioNum').textContent
    }

    console.log(infoCurso)

    //Revisa si un elemento ya existe en el carrito
    const existe = articulosCarrito.some(curso => curso.id === infoCurso.id)
    if(existe){
        //Actualizamos la cantidad
        const cursos = articulosCarrito.map( curso => {
            if(curso.id === infoCurso.id){
                curso.cantidad++
                return curso //Retorna el objeto actualizado
            }else{
                return curso //Retorna los objetos que no son duplicados
            }
        })
        articulosCarrito = [...cursos]
    }else{
        //Agrega elementos al arreglo del carrito
        articulosCarrito = [...articulosCarrito, infoCurso];
    }            

    localStorage.setItem('datos', JSON.stringify(articulosCarrito))

    carritoHTML()
}

//Muestra el carrito de compras en el HTML 
function carritoHTML() {
    //Limpiar el HTML
    limpiarHTML()

        var objetosCarrito = localStorage.getItem('datos')
        var objetoCarrito = JSON.parse(objetosCarrito)

        for(i=0; i < objetoCarrito.length; i++){

        //Recorre el carrito y genera el HTML
        const agregarCarrito = document.createElement('tr')
        agregarCarrito.innerHTML = `
            <td>
                <img src=${objetoCarrito[i].imagen} width="100px" />
            </td>
            <td>
                ${objetoCarrito[i].titulo}
            </td>
            <td>
                ${objetoCarrito[i].precio}
            </td>
            <td>
                ${objetoCarrito[i].cantidad}
            </td>
            <td>
                <a href="#" class="borrar-curso" data-id=${objetoCarrito[i].id} >X</a>
            </td>
        `
        //Agrega el HTML del carrito en el tbody
        contenedorCarrito.appendChild(agregarCarrito)
    }
}

//Eliminar los cursos de tbody
function limpiarHTML() {
    while(contenedorCarrito.firstChild){
        contenedorCarrito.removeChild(contenedorCarrito.firstChild)
    }
}

//Buscar libros
function buscarLibros(e) {
    const expresion = new RegExp(e.target.value),
        registros = document.querySelectorAll('.tres-columnas .card')

    registros.forEach(registro => {
        registro.style.display = 'none'

        if(registro.childNodes[3].textContent.replace(/\s/g, " ").search(expresion)!= -1){
            registro.style.display = 'block'
        }
    })
}

