<?php
//generamos la clase

class ClientesModel{
     private $db;
     private $cliente;

//generamos el constructor
    public function __construct(){
        $this->db = Conectar::Conexion();
        $this->cliente = array();
    }

    //metodo para obtener los clientes
    public function get_clientes(){
        $consulta = $this->db->query("SELECT * FROM cliente");
        while($filas=$consulta->fetch_assoc()){
            $this->cliente[]= $filas;
        }
    }
}

?>