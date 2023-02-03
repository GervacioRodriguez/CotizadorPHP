// registrar.addEventListener("click", () => {
//     fetch("cliente.php", {
//         method: "POST",
//         body: new FormData(frm_cliente)
//     }).then(response => response.text()).then(response => {
//         if (response == "ok") {
//             Swal.fire({
//                 icon: 'success',
//                 title: 'Registrado',
//                 showConfirmButton: false,
//                 timer: 1500
//             })
//             frm.reset();
//             ListarProductos();
//         }else{
//             Swal.fire({
//                 icon: 'success',
//                 title: 'Modificado',
//                 showConfirmButton: false,
//                 timer: 1500
//             })
//             registrar.value = "Registrar";
//             idp.value = "";
//             ListarProductos();
//             frm.reset();
//         }
//     })
// });



// function agregar(){
//     var datos = $("#frm_cliente").serialize();
//     $.ajax({
//         method:"POST",
//         url:"../CotizadorPHP/cliente.php",
//         data:datos,
//         success: function(e){
//             if(e==1){
//                 alert("registro existos");
//             }else{
//                 alert("Error al Guardar Registro ");
//                 // swal({
//                 //     title: "Algo salio mal!",
//                 //     text: "You clicked the button!",
//                 //     icon: "warning",
//                 //   });
//             }
//         }
//     });

//     return false;
// }