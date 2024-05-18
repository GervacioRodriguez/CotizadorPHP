<?php
require_once('php/Cors.php');
require_once('conn/conn.php');

$Conectar = conexion();

function ComprobarQuenoExistaProducto(){
    
}

switch($_GET['accion']){

    case'ListarProducto':    
        $MySQLClientes = "SELECT nombre,tel1 FROM cliente";
        $datos = mysqli_query($Conectar,$clientes);
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC); 
        echo json_encode($resultado);      
        mysqli_close($Conectar);
        break;
    case'InsertarProducto': 
        break;
    case'ModificarProducto':
        break;
    case'EliminarProducto':
        break;
    break;
}

?>