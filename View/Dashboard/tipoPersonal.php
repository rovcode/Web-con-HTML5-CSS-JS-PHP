<?php
  require_once '../../config.php';
  $Config = new Config();
?> 
<?php include_once 'layout.php';?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php include_once 'menuHorizontalSuperior.php';?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once 'menuVertical.php';?>

        <!-- Content Wrapper. Contains page content -->
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
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
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
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Lista de  tipo de personal</h3>
                                    
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
                                                <table id="example2"
                                                    class="table table-bordered table-hover dataTable dtr-inline"
                                                    role="grid" aria-describedby="example2_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting sorting_asc" tabindex="0"
                                                                aria-controls="example2" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="Rendering engine: activate to sort column descending">
                                                                Código</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Browser: activate to sort column ascending">
                                                                Nombre</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Platform(s): activate to sort column ascending"
                                                                style="">Detalle</th>   
                                                                <th class="sorting" tabindex="0" aria-controls="example2"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Platform(s): activate to sort column ascending"
                                                                style="">Admin</th>                                                         
                                                        </tr>
                                                    </thead>
                                                    <tbody id="Resultado" >
                                                       
                                                    </tbody>
                                                    <!-- <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">Rendering engine</th>
                                                            <th rowspan="1" colspan="1">Browser</th>
                                                            <th rowspan="1" colspan="1" style="">Platform(s)</th>
                                                            <th rowspan="1" colspan="1" style="">Engine version</th>
                                                            <th rowspan="1" colspan="1" style="">CSS grade</th>
                                                        </tr>
                                                    </tfoot> -->
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="example2_info" role="status"
                                                    aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                            </div>
                                            <!-- <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="example2_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="example2_previous"><a href="#" aria-controls="example2"
                                                                data-dt-idx="0" tabindex="0"
                                                                class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                                class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example2" data-dt-idx="2" tabindex="0"
                                                                class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example2" data-dt-idx="3" tabindex="0"
                                                                class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example2" data-dt-idx="4" tabindex="0"
                                                                class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example2" data-dt-idx="5" tabindex="0"
                                                                class="page-link">5</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example2" data-dt-idx="6" tabindex="0"
                                                                class="page-link">6</a></li>
                                                        <li class="paginate_button page-item next" id="example2_next"><a
                                                                href="#" aria-controls="example2" data-dt-idx="7"
                                                                tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
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
    <script type="text/javascript" >
        //Mantenimiento
        function EliminarTipo(id){
            let option = 3;
            swal({
                title: "¿Estás seguro de eliminar el registro?",                
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "POST",
                        url: "../../Controller/administracion/TipoPersonalController.php",
                        data:{id:id,option:option},
                        success: function(data){
                            ListaUsuarios();
                        },
                        });
                    swal("Eliminado", {
                    icon: "success",
                    });
                } else {
                    swal("No pasa nada!");
                }
                });
             
        }
        ListaUsuarios();
        function ListaUsuarios()
		{
			$.ajax({
				type:"GET",
				url:"../../Controller/administracion/TipoPersonalController.php",
				success: function(datos){
					$('#Resultado').html(datos);
                    console.log(datos);
				}
			});
		}
        //Fin Mantenimiento
    $.widget.bridge('uibutton', $.ui.button);
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
</body>

</html>