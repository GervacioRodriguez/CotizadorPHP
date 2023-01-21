<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../conn/header.php'?>
    <title>Insertar Productos</title>
</head>

<body>

    <ul>
      <li>
      
      </li>
    </ul>

    <?php include '../conn/menu.php';?>
    <?php
    if (isset($_POST['Guardar'])) //preguntamos si el usuario presiono el boton guardar
    {
        $descripcion = $_POST['fld_descripcion'];
        $precio_compra = $_POST['fld_pc'];
        $precio_venta = $_POST['fld_pv'];
        //llamamos el archivo php
        include_once "../conn/conn.php";
        //creamos el query
        $myInsert = "INSERT INTO producto(descripcion,pc,pv) VALUES ('" . $descripcion . "','" . $precio_compra . "','" . $precio_venta . "')";
        $resultado = mysqli_query($conn, $myInsert);

        if ($resultado) {
            echo "<script language='JavaScript'>
                    alert('los datos se guardaron correctamente');
                    location.assign('producto.php')
                    </script>
            ";
        } else {
            //var_dump($resultado);
            echo "<script language='JavaScript'>
                    alert('No se guardaron correctamente');
                    location.assign('insert_producto.php');
                    </script>
            ";
        }
        mysqli_close($conn);
    } else {

    ?>
    <i class="bi bi-search"></i>
        <section id="derecha">
            <h1>Agregar Nuevo Producto</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

                <labe>Descripcion:</labe><input type="text" name="fld_descripcion"><br>
                <label>Precio Compra $ </label><input type="text" name="fld_pc"><br>
                <label>Precio Venta $ </label><input type="text" name="fld_pv"><br>
                <input type="submit" name="Guardar" value="Guardar" onclick=mostrar()>
            </form>
        <?php  } ?>
        </section>

        <button>sw</button onclick="mostrar()">



  <table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>

<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/sweetalert/sweetalert.js"></script>
<script type="text/javascript">
  function mostrar(){
  swal(
    'perrillo'
  )
}
</script>
</body>

</html>