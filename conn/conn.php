<?php 
$server = "127.0.0.1";
$db = "cotizador";
$user = "root";
$pass = "";
$port = "3310";

$conn = mysqli_connect($server,$user,$pass,$db,$port);
if(!$conn){
    die("conexion fallida".mysqli_connect_errno());
}


?>