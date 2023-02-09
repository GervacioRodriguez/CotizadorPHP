<?php  
include ("../CotizadorPHP/conn/conn.php");
$correo = 'gervaciopabloantonio@gmail.com';
//var_dump($correo);
$consulta = mysqli_query($conn,"SELECT * FROM cliente WHERE email LIKE '%$correo%'");
//var_dump($consulta);
$total = mysqli_num_rows($consulta);
if($total == 0 ){
    echo "El usuario no existe";
}
else{
    //to destinatario
    //subject asunto del mail
    //message mensaje del correo
    //mail($correo,'Hola pendejo','vamos por la chelas');
    echo"hola";
   // header("location:clienteinsert.php");

}

?>