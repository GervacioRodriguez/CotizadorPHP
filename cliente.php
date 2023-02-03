<?php 
include("../CotizadorPHP/conn/conn.php");
//evitemos duplicados comprobar con los siguientes datos 
//correo electronico 
if(isset($_POST["email"])){
$existe = "SELECT COUNT(*) FROM cliente WHERE email LIKE $email";
if($existe > 0){

}
}


$nombre = $_POST["nombre"];
$ap = $_POST["ap"];
$am = $_POST["am"];
$tel1 = $_POST["tel"];
$email = $_POST["email"];
$fn = $_POST["fn"];
$fa = date("y-m-d H:m:s");
// $q = strtoupper( "INSERT INTO cliente(nombre,ap,am,tel1,email,fecha_naci,fecha_alta) 
//       VALUE ('$nombre','$ap','$am','$tel1','$email','$fn','$fa')");
$q = "INSERT INTO cliente(nombre,ap,am,tel1,email,fecha_naci,fecha_alta) 
VALUE ('$nombre','$ap','$am','$tel1','$email','$fn','$fa')";

echo mysqli_query($conn,$q);
?>