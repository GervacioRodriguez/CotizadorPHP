//Guardar productos
//RecuperarProducto();
document.getElementById("boton1").addEventListener("click",() => AgregarProducto());

function RecuperarProducto(){
    const liga='http://localhost/cotizadorphp/producto/dataproducto.php?accion=ListarProducto';
    fetch(liga)
    .then(response => response.json())
    .then(datos => {
        let cad ='';
        for(let producto of datos){
            cad +=`<tr>
                    <td>${producto.descripcion}</td>
                    <td>${producto.pv}</td> 
                    <td>${producto.existencias}</td>
                </tr>`;
            }
            document.getElementById('tbproductos').innerHTML=cad;
    });
}

function AgregarProducto(){
    const datos = new URLSearchParams(
        new FormData(document.getElementById("FrmProducto"))
    );
    const Agregar = 'http://localhost/cotizadorphp/producto/dataproducto.php?accion=InsertarProducto'
    fetch(Agregar,{
        method:'POST',
        body:datos
    })
    .then(response => response.json())
    .then(datos => ListarProductos());
}











