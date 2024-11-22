<?php
require_once("./Models/ClientesModel.php");
$cli=new ClientesModel();
$datos=$cli->get_clientes();
//llamamos a la vista

require_once("./Views/ClienteViews.php");


?>