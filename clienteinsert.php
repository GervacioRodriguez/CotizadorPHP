<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../lib/Librerias/bootstrap-5.1.3/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../lib/Librerias//bootstrap-5.1.3/css/bootstrap-utilities.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../CotizadorPHP/js/sweetalert/sweetalert.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente nuevo</title>
</head>
<body>

    <form id="frm_cliente" method="POST">
        Nombre(s): <input type="text" name="nombre" id=""><br>
        <!-- Apellido Paterno: <input type="text" name="ap" id=""><br>
        Apellido Materno: <input type="text" name="am" id=""><br>
        Telefono: <input type="tel" name="tel" id=""> <br>
        Email:<input type="text" name="email" id=""> <br>
        Fecha Nacimiento: <input type="date" name="fn" id=""><br> -->
        <input type="submit" value="Enviar" id="btn_guardar">
    </form>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btn_guardar').click(function(){
            var datos = $('#frm_cliente').serialize();
            alert(datos);
            return false;
            $.ajax({
                type:"POST",
                url:"../cliente.php",
                data:datos,
                success:function(e){
                    if(e==1){
                        alert("se agrego con exito");
                    }else{
                        alert("fallo el regoistro")
                    }
                }
            });
        });
    });
</script>
<!-- <script src="../CotizadorPHP/js/funciones.js"></script> -->
<!-- <script>
    $(document).ready(function(){
        //se ejecuta al cargar la pagina
        $("#btn_guardar").on('click',function(e){
            e.preventDefault();
            agregar();
        });
    });
</script>
<script>
    $(document).ready(function(){
        M.Autoinit();
    });
</script> -->
</body>
</html>