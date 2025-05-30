<?php
//Llamos a la clase Clientes.php
require_once("../models/Usuario.php");
 //Inicializamos el objeto de la clase Clientes.php
$objeto = new Usuario();
//Almacenamos los datos del formulario del panel_clientes.php dentro de una variable
$IdUsuario = trim($_POST['idUsuario_c']);
$nombre = trim($_POST['nombre_c']);
$apellido = trim($_POST['apellido_c']);
$Telefono = trim($_POST['telefono_c']);
//Utilizamos el metodo o funcion para registrar
if($objeto->registrar_Usuario($IdUsuario,$nombre,$apellido,$Telefono)){
    header("Location: ../views/panel_Usuario_registrar.php");
}else{
    header("Location: ../views/panel_Usuario_registrar.php");
}
?>