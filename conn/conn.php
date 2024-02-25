<?php

//variables
function conexion(){
$servidor = "127.0.0.1";
$user = "root";
$psw = "";
$db = "cotizador";
$port ="3310";
$conn = mysqli_connect($servidor,$user,$psw,$db,$port);
mysqli_set_charset($conn,'utf8');
return $conn;
}
?>