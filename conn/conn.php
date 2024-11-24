<?php

class Conectar{

    public static function Conexion(){
    $servidor = "127.0.0.1";
    $user = "root";
    $psw = "";
    $db = "cotizador";
    $port ="3310";
    $conn = new mysqli($servidor,$user,$psw,$db,$port);
          // Verificar si hay errores en la conexión
          if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }

    $conn->query("SET NAMES 'utf8'");

    return $conn;
}

}
?>