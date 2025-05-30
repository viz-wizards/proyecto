<?php
//Llamamos a la conexion
require_once("conexion.php");
//Creamos una clase llamada Usuario
class Usuario{
    //Creamos la funcion de registrar Usuario
    public function registrar_Usuario($IdUsuario, $nom, $ape, $telefono){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Almacenamos en una variable($sql) los comandos de INSERT
        $sql = "insert into tb_Usuario(idUsuario,nombre,apellido,telefono)values('$IdUsuario','$nom','$ape','$telefono)";
        //Ejecutamos la funcion
        return $cn->getEjecutionQuery($sql);
    }
    // Funcion para listar o dar reportes de todos los clientes
    public function reportes_Usuario(){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "SELECT * FROM tb_Usuario";
        //Ejecutamos el comando
         return $cn->getEjecutionQuery($sql);
    }

    // Funcion para eliminar clientes
    public function eliminar_Usuario_por_id($IdUsuario){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "DELETE FROM tb_Usuario WHERE tb_usuario = '$IdUsuario' ";
        //Ejecutamos el comando
         return $cn->setEjecutionQuery($sql);
    }

    // Funcion para editar Usuario
    public function editar_Usuario($IdUsuario,$nombre,$apellido,$Telefono){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "UPDATE tb_Usuario 
                SET nombre ='$nombre', apellido='$apellido', telefono='$Telefono' 
                WHERE dni = '$IdUsuario' ";
        //Ejecutamos el comando
         return $cn->setEjecutionQuery($sql);
    }

    // Funcion para consultar DNI y que salga todos los datos del usuario
    public function consultar_idUsuario($IdUsuario){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
       $sql = "SELECT * FROM tb_Usuario WHERE id_usuario = '$IdUsuario'";
        //Ejecutamos el comando
         return $cn->setEjecutionQuery($sql);
    }
    

}
?>