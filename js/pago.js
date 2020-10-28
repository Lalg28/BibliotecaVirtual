const listadoCarrito = document.querySelector('#lista-compra tbody')

paginaPaga()
totalPagar()

//Pasar a pagar
function paginaPaga() {

    var objetosCarrito = localStorage.getItem('datos');
        var objetoCarrito = JSON.parse(objetosCarrito);


        for(i=0; i < objetoCarrito.length; i++){
            console.log(objetoCarrito[i].titulo);

            const agregarCarrito = document.createElement('tr')

            agregarCarrito.innerHTML = `
            <td>
                <img src=${objetoCarrito[i].imagen} width="75px" />
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
            `

            listadoCarrito.appendChild(agregarCarrito)
        }
        
}

function totalPagar() {

    var objetosCarrito = localStorage.getItem('datos');
        var objetoCarrito = JSON.parse(objetosCarrito);


}

