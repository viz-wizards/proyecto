<?php
//Llamos a la clase Clientes.php
require_once("../models/Clientes.php");
//Inicializamos el objeto de la clase Clientes.php
$objeto = new Clientes();
//Almacenamos en un variable el POST[dni_c] del AJAX
$variable_dniClientes = $_POST['dniClientes_c'];
//Funcionar para eliminar cliente
if($objeto->eliminar_cliente_por_dni($variable_dniClientes)){
    echo "yes";
}else{
    echo "nope";
}
?>