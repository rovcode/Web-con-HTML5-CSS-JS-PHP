<?php
require_once 'Router.php';
$URI = new Router();
$var = $_SERVER['REQUEST_URI'];
$URI->Route($var);
require_once '../../config.php';
$Config = new Config();
?>
<style type="text/css">
     .horizontal-scroll > .row {
            overflow-x: auto;
            white-space: nowrap ;
        }
          
        .horizontal-scroll > .row > .col-xs-4 {
            display: inline-block;
            float: none;
        }
</style>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">Personal</h1>

                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                         <li class="breadcrumb-item active">Personal</li>
                     </ol>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <a href="<?php $Config->getRoute("NuevoPersonal.php");?>" class="btn btn-success  mb-2">Nuevo Ingreso</a>
             <div class="row">
                 <div class="col-12">

                     <div class="card-header">
                         <h3 class="card-title">Personal</h3>

                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                         <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 overflow-hidden horizontal-scroll">
                             <div class="row">
                                 <div class="col-sm-12 col-md-6"></div>
                                 <div class="col-sm-12 col-md-6"></div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12 ">
                                     <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                         role="grid" aria-describedby="example2_info">
                                         <thead>
                                             <tr role="row ">                                                    
                                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Browser: activate to sort column ascending">
                                                     Nombres</th>
                                                    <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">Apellidos</th>
                                                     <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">DNI</th>
                                                     <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">Usuario</th>
                                                     <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">Edad</th>
                                                     <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">Correo</th>
                                                     <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">Fecha Ingreso</th>
                                                     <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">Estado</th>
                                                 <th class="sorting text-center" tabindex="0" aria-controls="example2" rowspan="1"
                                                     colspan="1"
                                                     aria-label="Platform(s): activate to sort column ascending"
                                                     style="">Admin</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                         <?php
$lista = $_SESSION['ListaPersonal_table'];
foreach ($lista as $value) {?>
                                            <tr>
                                                    <td class="text-center" rowspan="1" colspan="1"><?php echo $value['NOMBRES']; ?></td>
                                                    <td class="text-center" rowspan="1" colspan="1"><?php echo $value['APELLIDOS']; ?></td>
                                                    <td class="text-center" rowspan="1" colspan="1"><?php echo $value['DNI']; ?></td>
                                                    <td class="text-center" rowspan="1" colspan="1"><?php echo $value['USUARIO']; ?></td>
                                                    <td class="text-center" rowspan="1" colspan="1">
                                                        <?php 
                                                        $facha_nac=(int)$value['FECHANAC']; 
                                                        $fecha_act=(int)date("Y-m-d"); 
                                                        $edad = $fecha_act-$facha_nac; echo $edad;
                                                         ?>
                                                    </td>
                                                    <td class="text-center" rowspan="1" colspan="1"><?php echo $value['CORREO']; ?></td>
                                                    <td class="text-center" rowspan="1" colspan="1"><?php echo $value['FECHAINGRESO']; ?></td>
                                                    <td class="text-center" rowspan="1" colspan="1"><?php echo $value['ESTADOUSUARIO']; ?></td>
                                                    <td class="text-center" rowspan="1" colspan="1">
                                                       <a href="<?php $Config->getRoute("EditarTipoPersonal.php");?>?id=<?php echo $value['ID']; ?>"><i class="fa fa-edit"></i></a>
                                                       <a href="#" onclick="EliminarPersonal(<?php echo $value['ID']; ?>)"><i class="fa fa-trash"></i></a>
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
function EliminarPersonal(id) {
    let option = "DeletePersonal";
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