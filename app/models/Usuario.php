<?php
//Llamamos la conexion
require_once 'conexion.php';
//Instancio o creo una clase o objeto
class Usuario{
    //Funcion para consultar a un usuario y logearse
    public function getLoginUsuario(){
        //Instanciamos el objeto
        // y almacenamos dentro de una variable
        $cn = new Conexion();
        $cn->conectar(); //utilizamos el metodo del objeto
        $sql = "SELECT * FROM tb_usuario"; //creamos el script del SQL
        return $cn->getEjecutionQuery($sql); //Obtenemos los datos de la ejecucion
    }

    // Funcion para listar o dar reportes de todos los clientes
    public function reportes_usuarios(){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "SELECT * FROM tb_cliente";
        //Ejecutamos el comando
         return $cn->getEjecutionQuery($sql);
    }

    // Funcion para eliminar clientes
    public function eliminar_usuarios_por_dni($dni){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "DELETE FROM tb_cliente WHERE dni = '$dni' ";
        //Ejecutamos el comando
         return $cn->setEjecutionQuery($sql);
    }

    // Funcion para editar clientes
    public function editar_usuarios($dni,$nombre,$apellido,$correo){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "UPDATE tb_cliente 
                SET nombre ='$nombre', apellido='$apellido', correo='$correo' 
                WHERE dni = '$dni' ";
        //Ejecutamos el comando
         return $cn->setEjecutionQuery($sql);
    }








    
}

