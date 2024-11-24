<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Content-Type: application/json');
require_once('conn/conn.php');
require_once('FuncionesPhp/Funciones.php');

$Conectar = conexion();


switch($_GET['accion']){

    case'ListarCliente':    
        $MySQLClientes = "SELECT nombre,tel1 FROM cliente";
        $datos = mysqli_query($Conectar,$clientes);
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC); 
        echo json_encode($resultado);      
        mysqli_close($Conectar);
        ValidarPrecios();
        break;
    case'InsertarCliente': 
        break;
    case'ModificarCliente':
        break;
    case'EliminarCliente':
        break;
    case 'listarProducto':
        $listar = "SELECT * FROM producto";
        $respuesta = mysqli_query($conn,$listar);
        $resultado = mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
        echo json_encode($resultado);
        mysqli_close($conn);
    break;
}

?>