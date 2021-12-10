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
                    <h1 class="m-0">Nuevo Producto</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Nuevo Producto</li>
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
                    ¡Nuevo producto registrado!
                </div>
            </div>
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nuevo Producto</h3>
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
                                    <label for="exampleInputEmail1">Descripción</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion"
                                        placeholder="Descripcion">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Calificación</label>
                                    <input type="number" class="form-control" name="calificacion" id="calificacion"
                                        placeholder="5">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Precio</label>
                                    <input type="number" class="form-control" name="precio" id="precio"
                                        placeholder="5.0">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Descuento</label>
                                    <input type="number" class="form-control" name="descuento" id="descuento"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Estado</label>
                                    <input type="text" class="form-control" name="estado" id="estado"
                                        placeholder="Disponible">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Imagen</label>
                                    <input type="text" class="form-control" name="correo" id="imagen"
                                        placeholder="default.png">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-lg-4 col-xs-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Categoría</label>
                                    <select class="form-control" name="tipoPersonal" id="categoria">
                                        <?php
                                    $tipos = $_SESSION['cbxListaCategorias'];
                                    
                                    foreach ($tipos as $tipo){?>
                                        <option value="<?php echo $tipo['ID'];?>"><?php echo $tipo['NOMBRE'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="buttom" class="btn btn-primary"
                                onclick="RegistrarProducto();">Registrar</button>
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
//Mantenimiento
function RegistrarProducto() {
    let option = "Registrar_Producto"
    let nombre = $('#nombre').val();
    let descripcion = $('#descripcion').val();
    let calificacion = $('#calificacion').val();
    let precio = $('#precio').val();
    let descuento = $('#descuento').val();
    let estado = $('#estado').val();
    let imagen = $('#imagen').val();
    let categoria = $('#categoria').val();

    $.ajax({
        type: "POST",
        url: "../../Model/helper/HelperPersonal.php",
        data: {
            option: option,
            nombre: nombre,
            descripcion: descripcion,
            calificacion: calificacion,
            precio: precio,
            descuento: descuento,
            estado: estado,
            imagen: imagen,
            categoria: categoria
        },
        success: function(data) {
            $("#msg").removeClass('d-none');
            setInterval(() => {
                window.location.href = "ListaProductos.php";
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