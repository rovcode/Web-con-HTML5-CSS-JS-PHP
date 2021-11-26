<?php
require_once 'Router.php';
$URI = new Router();
$var = $_SERVER['REQUEST_URI'];
$URI->Route($var);
require_once '../../config.php';
$Config = new Config();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar tipo personal 
                      <?php 
                      $list=$_SESSION['TPersonal'];
                      foreach($list as $value){
                        $id=$value['ID'];
                        $nombre=$value['NOMTIPO'];
                        $detalle=$value['DETALLE'];
                        $tipo=$value['TITPOUSUARIO'];
                      }
                      ?></h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="tipoPersonal.php">Personal</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="container d-none" id="msg">
                <div class="alert alert-success">
                    ¡Tipo personal actualizado!
                </div>
            </div>
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Editar Tipo Personal</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <input type="hidden" name="" id="id" value="<?php echo $id ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" name="nombreTipo" id="nombre"
                                    placeholder="Vendedor" value="<?php echo $nombre?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Detalle</label>
                                <input type="text" class="form-control" name="detalleTipo" id="detalle"
                                    placeholder="Vendedor presecial" value="<?php echo $detalle?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tipo</label>
                                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="3" value="<?php echo $tipo?>">
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="buttom" class="btn btn-primary"
                                onclick="ActualizarTipoPersonal();">Actualizar</button>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
</div>



    <footer class="main-footer">
        <strong>Copyright &copy;2021</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  
<script type="text/javascript">
    //Mantenimiento
    function ActualizarTipoPersonal(){
       let option= "Update";
       let nombre = $('#nombre').val();
       let detalle  = $('#detalle').val();
       let tipo = $('#tipo').val();
       let id = $('#id').val();
      
       swal({
            title: "¿Está seguro de actualizar?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "../../Model/Helper/helperPersonal.php",
                    data: {
                       option: option,
                        id: id,                        
                        nombre: nombre,
                        detalle: detalle,
                        tipo: tipo
                    },
                    success: function(data) {
                       setInterval(() => {
                          window.location.href = "tipoPersonal.php";
                       }, 1000);
                    },
                });
                swal("Registro actualizado", {
                    icon: "success",
                });
            } else {
                swal("No pasa nada!");
            }
        });

       
    }
    //Fin Mantenimiento
    $.widget.bridge('uibutton', $.ui.button);
    </script>
</body>

</html>