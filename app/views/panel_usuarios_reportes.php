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
    <title>Reporte de Usuario</title>
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
          <h1> Reporte de Usuarios <small>Control panel</small> </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Reporte Usuarios</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content ">
          <div class="row">
            <div class="col-lg-12 table-responsive">
                <!--  INICIO REPORTE DE CLIENTE -->
                    <table class="table table-hover" style="background:#FFFF;">
                        <tr>
                            <th>Id</th> 
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                        </tr>
                        <?php 
                         require_once("../models/Usuario.php");    
                          $objeto = new Usuario();
                          $resultado_lista = $objeto->reportes_Usuario();
                          while($fila = $resultado_lista->fetch_array(MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$fila['id_Usuario']."</td>";
                            echo "<td>".$fila['nombre']."</td>";
                            echo "<td>".$fila['apellido']."</td>";
                            echo "<td>".$fila['telefono']."</td>";
                            echo "<td>
                                    <button id='btnEditar' 
                                    data-idUsuario='$fila[id_Usuario]' 
                                    data-name='$fila[nombre]' data-lastname='$fila[apellido]' data-id_Usuario='$fila[id_Usuario]' 
                                    class='btn bg-light-blue-active color-palette'>
                                      <i class='fa fa-fw fa-edit'></i>
                                    </button>
                                    <button id='btnEliminar' data-idUsuario='$fila[id_Usuario]' class='btn bg-red-active color-palette'>
                                     <i class='fa fa-fw fa-trash'></i>
                                    </button>
                                  </td>";
                            echo "</tr>";
                          };
                        ?>
                    </table>
                <!--  FIN DE REPORTE DE CLIENTE-->
            </div>
          </div>
        </section>
      </div>

      <!-- Modal eliminar cliente -->
      <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Modal Eliminar Usuario</h4>
            </div>
            <div class="modal-body text-center">
              <input type="text" value="0" id="id_cliente">
              <h2>¿Estas seguro que deseas eliminar al Usuario?</h2>
              <h4>Esta acción no es reversible</h4>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-danger" id="btnEliminarCliente">Confirmar</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->       
      
      
      <!-- Modal Editar cliente -->
      <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Modal Editar Usuario</h4>
            </div>
            <div class="modal-body text-left">
            <!--  INICIO DE FORMULARIO -->
                <form action="#" method="post"> 
                  <div class="mb-3">
                      <label for="id_Usuario" class="form-label">idUsuario</label>
                      <input type="text" disabled="true" readOnly 
                      class="form-control" id="id_Usuario" name="idUsuario_c">
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
                      <input type="text" class="form-control" id="telefono" name="telefono_c">
                  </div>
                </form>
            <!--  FIN DE FORMULARIO-->          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-danger" id="btnEditarCliente">Confirmar</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->      
      
      <!-- Footer -->
      <?php require_once("default/footer.php");?>
    </div>  <!-- FINAL DEL DIV DEL CONTENEDOR -->
        <!-- Todos los scripts -->
      <script src="assets/js/reportes_Usuario.js"></script>
      <?php require_once("default/links-script.php");?>
  </body>
</html>
