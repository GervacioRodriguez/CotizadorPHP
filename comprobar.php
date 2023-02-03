<?php  
include ("../CotizadorPHP/conn/conn.php");
$correo = 'gervaciopabloantonio@gmail.com';
$q = mysqli_query($conn,"SELECT email FROM cliente WHERE email LIKE $correo");
$dato = mysqli_fetch_assoc($q);
$usuario = $dato['email'];
if($usuario ==""){

        echo "<h1>Usuario no registrado</h1>";
}
    else{
        echo $usuario."</br>";
        echo "Este ".$usuario;
    }

?>