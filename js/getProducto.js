// var url ="/Odata/Data.php?accion=listarProducto";
// fetch(url)
// .then(res => res.json())
// .then(json => console.log(json))
// .catch(err => console.log("fallo",err))

mostrarproducto();

var producto;
function mostrarproducto(){
    $.ajax({
        type:"GET",
        url:"/Odata/Data.php?accion=listarProducto",
        success: function(producto){
            let filas='';
            for(let producto of productos){
                filas += '<tr><td>' + producto.descripcion +  '</td></tr>';
            }
            $('#datos').html(filas);
        }
    });
}




//console.log("hola");
//alert("desde alert")

// $(function(){
//     alert("hola perro");
// });

// var url = "/Odata/Data.php?accion=listarProducto";
// function GetProductos(){
//     $("#datos").empty();
//     $.ajax({
//         type:"GET",
//         url:url,
//         dataType:'json',
//         success: function(respuesta){
//             var productos = respuesta;
//             if(productos.lenght>0){

//             }
//         }
//     });
// }












