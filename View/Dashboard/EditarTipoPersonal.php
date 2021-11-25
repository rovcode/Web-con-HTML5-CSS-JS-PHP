
<?php include_once 'layout.php';?>
<?php 
include_once '../../Controller/administracion/TipoPersonalController.php';
$update = new TipoPersonalController();
$id=$_GET['cod'];
$update->show($id);

?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

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
                            <h1 class="m-0">Editar Tipo Personal</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="#">Tipo Personal</a></li>
                                <li class="breadcrumb-item active">Editar</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="container d-none" id="msg">
              <div class="alert alert-success">
                  ¡Nuevo tipo personal registrado!
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo Tipo Personal</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          
                <input type="hidden" name="option" value="2" id="option">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="nombreTipo" id="nombre" placeholder="Vendedor" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Detalle</label>
                    <input type="text" class="form-control" name="detalleTipo" id="detalle" placeholder="Vendedor presecial">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tipo</label>
                    <input type="text" class="form-control" name="tipo" id="tipo" placeholder="3">
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="buttom" class="btn btn-primary" onclick="RegistrarTipoPersonal();">Registrar</button>
                </div>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->

        </div>

                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include_once 'footer.php'; ?>
    <script type="text/javascript" >
        //Mantenimiento
        DetalleTipoPersonal();
       function DetalleTipoPersonal(){
         let id = $_GET["cod"];
         let option = 4;
        $.ajax({
				type:"GET",
				url:"../../Controller/administracion/TipoPersonalController.php",
                data: {id:id,option:option},
				success: function(datos){
					$('#Resu').html(datos);
                    console.log(datos);
				}
			});
       }
        function RegistrarTipoPersonal(){          
            let nombre  = $('#nombre').val();
            let detalle = $('#detalle').val();
            let tipo= $('#tipo').val();
            let option  = $('#option').val();
            $.ajax({
               type: 'POST',
               url:"../../Controller/administracion/TipoPersonalController.php",
               data: {nombreTipo:nombre,detalleTipo:detalle,tipo:tipo,option:option},
               success: function(data){ 
                $("#msg").removeClass("d-none");            
                 setInterval(() => {
                   AlertaMantenimiento("tipoPersonal.php");
                 }, 2000);
                
               },
               error: function(error) {
                 console.log(error);
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
        function AlertaMantenimiento(route){ 
          window.location.href=route;
        }
        //Fin Mantenimiento
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    
</body>

</html>