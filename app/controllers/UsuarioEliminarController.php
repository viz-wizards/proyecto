<?php
//Llamos a la clase Clientes.php
require_once("../models/Usuario.php");
//Inicializamos el objeto de la clase Clientes.php
$objeto = new Usuario();
//Almacenamos en un variable el POST[dni_c] del AJAX
$variable_IdUsuario = $_POST['idUsuario_c'];
//Funcionar para eliminar Usuario
if($objeto->eliminar_Usuario_por_id($variable_IdUsuario)){
    echo "yes";
}else{
    echo "nope";
}
?>