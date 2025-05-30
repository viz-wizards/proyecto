<?php
//Llamos a la clase Clientes.php
require_once("../models/Usuario.php");
//Inicializamos el objeto de la clase Clientes.php
$objeto = new Usuario();
//Almacenamos las variables de reporte_clientes.js
$variable_IdUsuario= $_POST['idUsuario_c'];
$variable_nombre = $_POST['name_c'];
$variable_apellido = $_POST['apellido_c'];
$variable_Telefono = $_POST['telefono_c'];
//Creamos un condicional para saber si se actualizo correctamente
if($objeto->editar_Usuario($variable_IdUsuario,$variable_nombre,$variable_apellido,$variable_Telefono)){
    echo "yes";
}else{
    echo "nope";
}



?>