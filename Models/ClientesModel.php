<?php
class ClientesModel {
    private $db;
    private $cliente;

    // Constructor para inicializar la conexión y la lista de clientes
    public function __construct() {
        $this->db = Conectar::Conexion();
        $this->cliente = array();
    }

    // Obtener todos los clientes
    public function get_clientes() {
        $consulta = $this->db->query("SELECT * FROM cliente");
        while ($filas = $consulta->fetch_assoc()) {
            $this->cliente[] = $filas;
        }
        return $this->cliente;
    }

    // Obtener cliente por ID
    public function get_cliente_by_id($id) {
        $consulta = $this->db->query("SELECT * FROM cliente WHERE id = $id");
        return $consulta->fetch_assoc();
    }

    // Crear un nuevo cliente
    public function insert_cliente($nombre, $email, $telefono) {
        $consulta = $this->db->prepare("INSERT INTO cliente (nombre, email, telefono) VALUES (?, ?, ?)");
        $consulta->bind_param("sss", $nombre, $email, $telefono);
        return $consulta->execute();
    }

    // Actualizar un cliente existente
    public function update_cliente($id, $nombre, $email, $telefono) {
        $consulta = $this->db->prepare("UPDATE cliente SET nombre = ?, email = ?, telefono = ? WHERE id = ?");
        $consulta->bind_param("sssi", $nombre, $email, $telefono, $id);
        return $consulta->execute();
    }

    // Eliminar un cliente
    public function delete_cliente($id) {
        $consulta = $this->db->prepare("DELETE FROM cliente WHERE id = ?");
        $consulta->bind_param("i", $id);
        return $consulta->execute();
    }
}
?>
