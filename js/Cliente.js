/*creamos la conexion a la web api*/
ingresar();
//const ListarClientes = 'https://localhost/CotizadorPHP/Odata/Data.php?accion=ListarCliente';

function ingresar(){
    //alert('alcanzado');
    Swal.fire({
        title: "Buen trabajo!",
        text: "Oprime el boton",
        icon: "success"
      });

}


ListarClientes();

function ListarClientes(){
    fetch(ListarClientes)
    .then(res => res.json())
    .then(datos =>{
        let imprimitCliente =''
        for(let cliente of datos){
            imprimitCliente +=
             `
             <tr>
               <td>${cliente.nombre}</td>
             </tr>
             `
        }
        document.getElementById("clientes").innerHTML = imprimitCliente;
    });
}











