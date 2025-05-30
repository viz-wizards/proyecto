<?php
//Llamos a la clase Clientes.php
require_once("../models/Usuario.php");
//Inicializamos el objeto de la clase Clientes.php
$objeto = new Usuario();
//Hacemos una condicional si existe el GET['dni_c']
if(isset($_GET['idUsuario_c'])){
    $variable_IdUsuario = $_GET['idUsuario_c']; //almacenamos en una variable el dato GET
    //Almacenamos la funcion en la variable $resultado_lista
    $resultado_lista = $objeto->consultar_idUsuario( $variable_IdUsuario); 

    //Almacenamos dentro de un Array
    $datos_Usuario = [];

    // hacemos un bucle para consultar a los Usuarios
    // $fila es la variable que almacenaremos todos los datos del Usuario
    while($fila = $resultado_lista->fetch_array(MYSQLI_ASSOC)){
        // print_r($fila);
        $datos_Usuario[] = $fila;
    }

    //Creamos el formato JSON
    header('Content-Type: application/json');
    echo json_encode($datos_Usuario);
}


?>