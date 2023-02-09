<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    mexico
    <ul><li><a href="../producto/producto.php">mexico</a> </li></ul>
    <?php
    include("../CotizadorPHP/conn/conn.php");
    $productos = mysqli_query($conn,"SELECT * FROM producto");
    echo "<table border=1>";
    echo "<thead>";
    echo "<tr>  <td>Id</td>
                <td>Codigo Corto</td>
                <td>Descripcion</td>
                <td>Costo Compra</td>
                <td>Costo Venta</td>
                <td>Categoria</td>
                <td>foto</td>
         </tr>";
    echo "</thead>";
    while($reg = mysqli_fetch_row($productos)){
    echo "<tr>";
    echo "<tb>";
    foreach($reg as $cambia){
    echo "<td>".$cambia."</td>";
    }
    }
    echo "</table>";
    ?>
</body>
</html>






