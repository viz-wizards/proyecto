<?php
//Llamos a la clase Clientes.php
require_once("../models/Clientes.php");
 //Inicializamos el objeto de la clase Clientes.php
$objeto = new Clientes();
//Almacenamos los datos del formulario del panel_clientes.php dentro de una variable
$idClientes = trim($_POST['idClientes_c']);
$dniClientes = trim($_POST['dniClientes_c']);
$nombreClientes = trim($_POST['nombreClientes_c']);
$apellidoClientes = trim($_POST['apellidoClientes_c']);
$celularClientes = trim($_POST['celularClientes_c']);
//Utilizamos el metodo o funcion para registrar
if($objeto->registrar_cliente($idClientes,$dniClientes,$nombreClientes,$apellidoClientes,$celularClientes)){
    header("Location: ../views/panel_clientes_registrar.php");
}else{
    header("Location: ../views/panel_clientes_registrar.php");
}
?>