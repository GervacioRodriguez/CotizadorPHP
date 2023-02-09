<?php 


include("../CotizadorPHP/conn/conn.php");

$nombre = $_POST["nombre"];
$ap = $_POST["ap"];
$am = $_POST["am"];
$tel1 = $_POST["tel"];
$email = $_POST["email"];
$fn = $_POST["fn"];
$fa = date("y-m-d H:m:s");
$ip = $_SERVER['REMOTE_ADDR']; //OBTENEMOS LA IP DEL USUARIO.
$ug = $_SERVER['HTTP_USER_AGENT'];//obtenemos el navegador de la persona
//$sistema = php_uname();//para obtener el sistema operativo en que esta ejectandose.
//pasar a mayusculas la cadena
///creamos un script para revisar si existen duplicados los duplicados seran del
//correo electronico y numero telefonico
$duplicado =strtoupper("SELECT COUNT(*) FROM cliente WHERE tel1 LIKE '%$tel1%' AND LIKE '%$email%'");
if($duplicado>0){
    //si existe que mande una alerta
    echo "Este usuario esta ya registrado";
}else{
    //aqui va la seccion para insertar datos 
    
$q =strtoupper("INSERT INTO cliente(nombre,ap,am,tel1,email,fecha_naci,fecha_alta,ipuser,navegador) 
VALUE ('$nom','$ap','$am','$tel1','$email','$fn','$fa','$ip','$ug')");

//echo mysqli_query($conn,$q);
if(mysqli_query($conn,$q)){
    //echo "ok";
    echo json_encode('llena los datos');
    mysqli_close($conn);
}else{
    //echo "no";
    echo json_encode('error al cguardar');
    mysqli_close($conn);
} 
}
mysqli_close($conn);
?>