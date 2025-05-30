<?php
//Llamos a la clase Clientes.php
require_once("../models/Clientes.php");
//Inicializamos el objeto de la clase Clientes.php
$objeto = new Clientes();
//Almacenamos las variables de reporte_clientes.js
$variable_idClientes = $_POST['idClientes_c'];
$variable_dniClientes = $_POST['dniClientes_c'];
$variable_nombreClientes = $_POST['name_c'];
$variable_apellidoClientes = $_POST['apellido_c'];
$variable_celularClientes = $_POST['celularCliente_c'];
//Creamos un condicional para saber si se actualizo correctamente
if($objeto->editar_cliente($variable_idClientes,$variable_dniClientes,$variable_nombreClientes,$variable_apellidoClientes,$variable_celularClientes)){
    echo "yes";
}else{
    echo "nope";
}



?>