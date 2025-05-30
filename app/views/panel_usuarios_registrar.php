<?php 
  session_start();
  if(isset($_SESSION["usuario_sesion"])){
    $nombre_usuario = $_SESSION["usuario_sesion"]["nombre"];
    $apellido_usuario = $_SESSION["usuario_sesion"]["apellido"];
    $privilegios_usuario = $_SESSION["usuario_sesion"]["id_rol"];
  }else{
    header("location: ../index.php");
    // echo "No existe la sessión";
    // exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Registro de Usuarios</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <!-- Incluir una vez todos los links -->
    <?php include_once("default/links-head.php") ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper"> <!-- INICIO DEL DIV DEL CONTENEDOR -->
      <!-- Cabezera y Nav del lado izquierdo -->
      <?php require_once("default/navigation.php") ?>
      <!-- Content Wrapper - Contenido Principal-->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Registro de Usuario<small>Control panel</small> </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Registro Usuarios</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-3">
            <!--  INICIO DE FORMULARIO -->
                <form action="../controllers/UsuarioRegistrarController.php" method="post"> 
                <div class="mb-3">
                    <label for="id_Usuario" class="form-label">IdUsuario</label>
                    <input type="text"  class="form-control" id="id_Usuario" name="idUsuario_c">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre_c">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido_c">
                </div>
                <div class="mb-4 mt-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="telefono" class="form-control" id="telefono" name="telefono_c">
                </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            <!--  FIN DE FORMULARIO-->
            </div>
          </div>
        </section>
      </div>
      <!-- Footer -->
      <?php require_once("default/footer.php");?>
    </div>  <!-- FINAL DEL DIV DEL CONTENEDOR -->
        <!-- Todos los scripts -->
      <?php require_once("default/links-script.php");?>
  </body>
</html>
