<?php
class ClientesController {
    private $model;

    public function __construct() {
        $this->model = new ClientesModel();
    }

    // Listar todos los clientes
    public function listar() {
        $clientes = $this->model->get_clientes();
        require_once "../Views/Cliente/ClienteListarViews.php";
    }

    // Mostrar formulario para crear un cliente
    public function crear() {
        require_once "./Views/Cliente/ClienteCrearView.php";
    }

    // Guardar un nuevo cliente
    public function guardar() {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $this->model->insert_cliente($nombre, $email, $telefono);
        header("Location: index.php?c=clientes&a=listar");
    }

    // Mostrar formulario para editar un cliente
    public function editar() {
        $id = $_GET['id'];
        $cliente = $this->model->get_cliente_by_id($id);
        require_once "views/clientes/editar.php";
    }

    // Actualizar un cliente
    public function actualizar() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $this->model->update_cliente($id, $nombre, $email, $telefono);
        header("Location: index.php?c=clientes&a=listar");
    }

    // Eliminar un cliente
    public function eliminar() {
        $id = $_GET['id'];
        $this->model->delete_cliente($id);
        header("Location: index.php?c=clientes&a=listar");
    }
}
?>
