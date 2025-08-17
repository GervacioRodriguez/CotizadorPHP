<?php 
    class Productocontroller{
        private $model;

        //generamos el contructor

        public function __construct() {
        //apuntamos hacia el modelo
        $this->model = new ProductoModel();
        }

        public function crearproducto() {
            require_once("./Views/Producto/InsertProductoView.php");

        }

    }
?>