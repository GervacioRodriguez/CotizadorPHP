<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<link rel="stylesheet" href="../lib/Librerias/bootstrap-5.1.3/css/bootstrap-grid.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../CotizadorPHP/js/sweetalert/sweetalert.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CotizadorPHP/bootstrap-5.1.3/css/bootstrap-grid.css">
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../CotizadorPHP/js/jquery-3.6.0.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../CotizadorPHP//bootstrapIcons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CotizadorPHP/bootstrap-5.1.3/css/bootstrap-grid.min.css"> -->
    <title>Cliente nuevo</title>
</head>
<body>
    <?php 
    //echo php_uname();
    // echo '<br>';
    //  echo $user_agent = $_SERVER['HTTP_USER_AGENT'].'<br>';
    //  echo $ip = $_SERVER['REMOTE_ADDR'];
    //mail();    //se hara un script si el cliente esta inactivo 30dias se mandara correo 
    ?>

    <form id="frm_cliente" method="POST">
        Nombre(s): <input type="text" name="nombre" id=""><br>
        Apellido Paterno: <input type="text" name="ap" id=""><br>
        Apellido Materno: <input type="text" name="am" id=""><br>
        Telefono: <input type="tel" name="tel" id=""> <br>
        Email:<input type="text" name="email" id=""> <br>
        Fecha Nacimiento: <input type="date" name="fn" id=""><br>
        <input type="submit" value="Enviar" id="btn_guardar">
        <!-- <a href="../CotizadorPHP/cliente.php"></a> -->
    </form>

    <table border="1px">
        <thead>
            <tr>
                <td>Cliente</td>
                <td>telefono</td>
                <td>correo electronico</td>
                <td>operaciones</td>
            </tr>
        </thead>
        <?php 
        include("../CotizadorPHP/conn/conn.php");
        $i = "SELECT * FROM cliente";
        $ejecutar = mysqli_query($conn,$i);
        while($fila=mysqli_fetch_array($ejecutar)){
        ?>
        <tbody>
                <tr>
                    <td><?php echo $fila['nombre']."  ".$fila['ap']."  ".$fila['am']?></td>
                    <td><?php echo $fila['tel1']?></td>
                    <td><?php echo $fila['email']?></td>
                    <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Editar</button>
                    -
                    <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
        </tbody>
        <?php } ?>
    </table>

    <!--Creacion del modal productos-->
    <div class="modal-dialog modal-dialog-centered">
  <h3>modal de productos</h3>
    </div>

</body>
<script>

    $(document).ready(function(){
        $('#btn_guardar').on(click(function(e){
            e.preventDefault();
            var datos = $('#frm_cliente').serialize();
        //    console.log(frm_cliente);
        //    console.log(datos.toUpperCase());
        //    return false;
            $.ajax({
                type:"POST",
                url:"../CotizadorPHP/cliente.php",
                data:datos,
                success:function(r){
                    console.log(datos);
                    if(r == 1){
                        $('input[type="text"]').val('');
                        $('input[type="tel"]').val('');
                        $('input[type="date"]').val('');
                        alert("agregado con exito");
                        
                    }else{
                        alert("fallo el guadado")
                    }
                }
            });
            return false;
        }));
    });
</script>
</html>