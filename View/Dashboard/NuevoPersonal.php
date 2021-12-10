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
                    <h1 class="m-0">Nuevo Personal</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Nuevo Personal</li>
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
                    ¡Nuevo personal registrado!
                </div>
            </div>
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nuevo Personal</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body row">
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                        placeholder="Nombres">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Apellidos</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido"
                                        placeholder="Apellidos" >
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">DNI</label>
                                    <input type="number" class="form-control" name="dni" id="dni"
                                        placeholder="72450897" onchange="GeneraUsuario()">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Usuario</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario"
                                        placeholder="Usuario">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Conntraseña</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fecha Nacimiento</label>
                                    <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                                        placeholder="02/02/1995">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo</label>
                                    <input type="email" class="form-control" name="correo" id="correo"
                                        placeholder="usuario@magentastyle.com">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dirección</label>
                                    <input type="text" class="form-control" name="direccion" id="direccion"
                                        placeholder="Av. 366 - SJL">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fecha Ingreso</label>
                                    <input type="text" class="form-control" name="fechaing" id="fechaing"
                                        placeholder="01/12/2020">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiempo Contrato</label>
                                    <input type="text" class="form-control" name="fechasal" id="fechasal"
                                        placeholder="31/12/1999">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Estado Usuario</label>
                                    <input type="text" class="form-control" name="estado" id="estado"
                                        placeholder="Activo">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tipo Personal</label>
                                    <select class="form-control" name="tipoPersonal" id="tipoPersonal">
                                    <?php
                                    $tipos = $_SESSION['cbxTipoPersonal'];
                                    
                                    foreach ($tipos as $tipo){?>
                                    <option value="<?php echo $tipo['ID'];?>"><?php echo $tipo['NOMTIPO'];?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Permisos del Menu</label>
                                    <select class="form-control" name="menuPersonal" id="menuPersonal">
                                    <?php
                                    $tipos = $_SESSION['cbxMenuParametros'];
                                    
                                    foreach ($tipos as $tipo){?>
                                    <option value="<?php echo $tipo['ID'];?>"><?php echo $tipo['TIPOPARAMETRO'];?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="buttom" class="btn btn-primary"
                                onclick="RegistrarPersonal();">Registrar</button>
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
<script type="text/javascript">
   function GeneraUsuario(){
      let nombre = $('#nombre').val();
      let apellido = $('#apellido').val();
      let dni = $('#dni').val();
      let nuevousuario = nombre.charAt(0).toUpperCase()
      +apellido.charAt(0).toUpperCase()+apellido.charAt(1).toUpperCase()
      +dni.charAt(3)
      +dni.charAt(4)
      +dni.charAt(5)
      +dni.charAt(6)
      +dni.charAt(7)
      +dni.charAt(8);
      $("#usuario").val(nuevousuario);
      $("#usuario").attr("disabled", true);
   }
   GeneraFechas();
   function GeneraFechas(){
    const hoy = new Date();   
    //$("#fechaing").val(hoy.toLocaleDateString());
    $("#fechaing").val("2021/12/03");
    $("#fechaing").attr("disabled", true);
    $("#fechasal").val("9999/12/25");
    $("#fechasal").attr("disabled", true);
   }
   
//  test();
//   function test(){
//     $('#nombre').val("test");
//     $('#apellido').val("testa");
//     $('#dni').val(72450897);
//     $('#fecha_nacimiento').val("1995/02/28");
//     $('#correo').val("hola@hotmail.com");
//     $('#direccion').val("test 123");
//     $('#estado').val("Activo");
//   }

    //Mantenimiento
    function RegistrarPersonal(){
       let option = "New_Personal"
       let nombre = $('#nombre').val();
       let apellido  = $('#apellido').val();
       let dni = $('#dni').val();
       let usuario = $('#usuario').val();
       let password = $('#password').val();
       let fecha_nacimiento = $('#fecha_nacimiento').val();
       let correo = $('#correo').val();
       let direccion = $('#direccion').val();
       let fechaing = $('#fechaing').val();
       let fechasal = $('#fechasal').val();
       let estado = $('#estado').val();
       let tipoPersonal = $('#tipoPersonal').val();
       let menuPersonal = $('#menuPersonal').val();
       $.ajax({
           type: "POST",
           url: "../../Model/helper/HelperPersonal.php",
           data: {
               option: option,
               nombre: nombre,
               apellido:apellido,
               dni: dni,
               usuario:usuario,
               password:password,
               fecha_nacimiento: fecha_nacimiento,
               correo:correo,
               direccion:direccion,
               fechaing:fechaing,
               fechasal:fechasal,
               estado:estado,
               tipoPersonal:tipoPersonal,
               menuPersonal:menuPersonal
            },
           success: function (data){
            $("#msg").removeClass('d-none');
             setInterval(() => {
               //window.location.href = "ListaPersonal.php";
             }, 1000);
           }
       });
       
    }
    function EditarTipo(id) {
        alert(id);
        let option = 4;
        $.ajax({
            type: "POST",
            url: "../../Controller/administracion/TipoPersonalController.php",
            data: {
                id: id,
                option: option
            },
            success: function(data) {
                console.log(data);
            }
        });
    }

    function EliminarTipo(id) {
        let option = 3;
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
                        url: "../../Controller/administracion/TipoPersonalController.php",
                        data: {
                            id: id,
                            option: option
                        },
                        success: function(data) {
                            ListaUsuarios();
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
 