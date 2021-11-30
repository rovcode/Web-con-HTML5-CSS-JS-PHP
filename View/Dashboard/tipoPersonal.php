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
                     <h1 class="m-0">Tipo Personal</h1>

                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                         <li class="breadcrumb-item active">Tipo Personal</li>
                     </ol>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <a href="<?php $Config->getRoute("NuevoTipoPersonal.php");?>" class="btn btn-success  mb-2">Nuevo Tipo</a>
             <div class="row">
                 <div class="col-12">

                     <div class="card-header">
                         <h3 class="card-title">Lista de tipo de personal</h3>

                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                             <div class="row">
                                 <div class="col-sm-12 col-md-6"></div>
                                 <div class="col-sm-12 col-md-6"></div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                         role="grid" aria-describedby="example2_info">
                                         <thead>
                                             <tr role="row">
                                                 <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"
                                                     rowspan="1" colspan="1" aria-sort="ascending"
                                                     aria-label="Rendering engine: activate to sort column descending">
                                                     Código</th>
                                                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Browser: activate to sort column ascending">
                                                     Nombre</th>
                                                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">Detalle</th>
                                                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">Admin</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                        <?php
$lista = $_SESSION['ListaPersonal'];
foreach ($lista as $value) {?>
                                            <tr>
                                                    <td rowspan="1" colspan="1"><?php echo $value['ID']; ?></td>
                                                    <td rowspan="1" colspan="1"><?php echo $value['NOMTIPO']; ?></td>
                                                    <td rowspan="1" colspan="1"><?php echo $value['DETALLE']; ?></td>
                                                    <td rowspan="1" colspan="1">
                                                       <a href="<?php $Config->getRoute("EditarTipoPersonal.php");?>?id=<?php echo $value['ID']; ?>"><i class="fa fa-edit"></i></a>
                                                       <a href="#" onclick="EliminarTipo(<?php echo $value['ID']; ?>)"><i class="fa fa-trash"></i></a>
                                                    </td>
                                            <?php }?>

                                         </tbody>


                                     </table>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12 col-md-5">
                                     <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                       
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- /.card-body -->
                 </div>
             </div>
             <!-- /.col -->
         </div>
         <!-- /.row -->

 </div><!-- /.container-fluid -->
 </section>



 <footer class="main-footer">
            <strong>Copyright &copy; 2021 
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
function EliminarTipo(id) {
    let option = "Delete";
    swal({
            title: "¿Está seguro de eliminar?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "../../Model/helper/HelperPersonal.php",
                    data: {
                        id: id,
                        option: option
                    },
                    success: function(data) {
                       setInterval(() => {
                           window.location.reload();
                       }, 1000);
                    },
                });
                swal("Registro eliminado", {
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