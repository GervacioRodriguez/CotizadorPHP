<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

include ('../conn/conn.php');
//include ('../CotizadorPHP/cliente.php');
//include('../cliente.php');
$productos = "SELECT descripcion, pc FROM producto";

$resultado = mysqli_query($conn,$productos);
$datos = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
//var_dump($datos);

if(!empty($datos)){
    echo json_encode($datos);
    mysqli_close($conn);
}else{
    echo json_encode([]);//si falla lo enviara como un json vacio
    mysqli_close($conn);
}

?>