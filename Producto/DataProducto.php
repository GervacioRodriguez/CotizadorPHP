<?php
require_once('../php/Cors.php');
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
// header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
// header('Content-Type: application/json');




require_once('../conn/conn.php');
require_once('../FuncionesPhp/Funciones.php');

 $Conectar = conexion();

switch($_GET['accion']){

    case'ListarProducto':    
        $MySQLProductos = "SELECT descripcion,pv,existencias FROM producto";
        $datos = mysqli_query($Conectar,$MySQLProductos);
        $resultado = mysqli_fetch_all($datos,MYSQLI_ASSOC); 
        echo json_encode($resultado);      
        mysqli_close($Conectar);
        break;
    case'InsertarProducto': 
        $descricpcio = $_POST['descripcion'];
        $precio =$_POST['precio'];
        $existencias = $_POST['existencias'];
        $MySQLInsertarProductos ="INSERT INTO producto(descripcion,pv) VALUE ($descripcion,$preci)";
        $respuesta = mysqli_query($conexion,$MySQLInsertarProductos);
        echo json_encode($respuesta);
        break;
    case'ModificarCliente':
        break;
    case'EliminarCliente':
        break;
  
}



?>