<?php
header('content-type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
require('../conn/conn.php');

// switch($_GET['accion']){
//     case 'entrar':
//         $listar = "SELECT * FROM producto";
//         $respuesta = mysqli_query($conn,$listar);
//         $resultado = mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
//         echo json_encode($resultado);
//         mysqli_close($conn);
//     break;
//
$correo = $_POST["email"];
$contra = $_POST["contra"];
$usuario =("SELECT * FROM persona WHERE contra = $contra AND email = $correo");
$query = mysqli_query($conn,$usuario);
$nr = mysqli_num_rows($query);
if($nr ==1){
    echo "bienvenido perrro";
}
else{
    echo "no existe el registro";
}
?>
