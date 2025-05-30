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
    <title>Registro de clientes</title>
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
          <h1> Registro de clientes <small>Control panel</small> </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Registro Clientes</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-3">
            <!--  INICIO DE FORMULARIO -->
                <form action="../controllers/ClienteRegistrarController.php" method="post"> 
                <div class="mb-3">
                    <label for="dniClientes" class="form-label">DniClientes</label>
                    <input type="text" class="form-control" id="dniClientes" name="dniClientes_c">
                </div>
                <div class="mb-3">
                    <label for="nombreClientes" class="form-label">NombreClientes</label>
                    <input type="text" class="form-control" id="nombre" name="nombre_c">
                </div>
                <div class="mb-3">
                    <label for="apellidoClientes" class="form-label">ApellidoClientes</label>
                    <input type="text" class="form-control" id="apellido" name="apellido_c">
                </div>
                <div class="mb-4 mt-3">
                    <label for="celularClientes" class="form-label">CelularClientes</label>
                    <input type="text" class="form-control" id="celularClientes" name="celularClientes_c">
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
