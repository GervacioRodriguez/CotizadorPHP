<?php
//header('Content-Type: application/json');
header('content-type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');


// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
// header("Allow: GET, POST, OPTIONS, PUT, DELETE");
// $method = $_SERVER['REQUEST_METHOD'];
// if($method == "OPTIONS") {
//     die();
// }

include('.//conn/conn.php');
// include('.//verproducto.php');

$productos = "SELECT * FROM producto";
$sql = mysqli_query($conn,$productos);
$resultado = mysqli_fetch_all($sql, MYSQLI_ASSOC);
echo json_encode($resultado);
mysqli_close($conn);
?>