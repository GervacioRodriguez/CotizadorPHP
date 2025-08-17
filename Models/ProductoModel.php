<?php 
include_once("../conn/conn.php");
//llamamos la conexion

class Producto{
    private $db;
    private $prodcuto;

    //creamos el constructor
    public function __construct(){
        $this->db = Conectar::Conexion();
        $this->prodcuto = new Producto();
    }

    public function AgregarProducto($descripcion,$precioventa,$preciocompra,$existencias){
        $desc = trim($_POST[$descripcion]);
        $pc = trim($_POST[$precioventa]);
        $pv = trim($_POST[$preciocompra]);
        $exi = trim($_POST[$existencias]);
        $MySql = "INSERT INTO porducto VALUES($desc,$pc,$pv,$exi)";
        $consulta = $this->db->prepare($MySql);
        return $consulta->execute();
    }
}

?>