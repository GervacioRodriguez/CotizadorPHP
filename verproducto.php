<?php
include('../conn/conn.php');
include('/xampp/htdocs/CotizadorPHP/producto/verproducto.php');
$productos = "SELECT * FROM producto";
$sql = mysqli_query($conn,$productos);
$resultado = mysqli_fetch_all($sql, MYSQLI_ASSOC);
exit(json_encode($resultado));
?>