function agregar(){
    var datos = $("#frm_cliente").serialize();
    $.ajax({
        method:"POST",
        url:"../CotizadorPHP/cliente.php",
        data:datos,
        success: function(e){
            if(e==1){
                alert("registro existos");
            }else{
                alert("Error al Guardar Registro ");
                // swal({
                //     title: "Algo salio mal!",
                //     text: "You clicked the button!",
                //     icon: "warning",
                //   });
            }
        }
    });

    return false;
}