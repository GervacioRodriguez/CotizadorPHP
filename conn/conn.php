<?php

class Conectar{

    public static function Conexion(){
    $servidor = "127.0.0.1";
    $user = "root";
    $psw = "";
    $db = "cotizador";
    $port ="3310";
    $conn = new  mysqli($servidor,$user,$psw,$db,$port);
    $conn->query("SET NAMES 'utf8'");
    return $conn;
}

}
?>