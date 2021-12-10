<?php
require_once '../../Model/ProductosDAO.php';
require_once '../../Model/administracion/Productos.php';
$ObjPersonal = new ProductosDAO();
 class ProductosController{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new ProductosDAO();
    }
    public function Index()
    {      
        $ObjTipoPersonal = $this->model->ListaProductos();
        include_once '../../View/Dashboard/ListaProductos.php';
        include_once '../../View/Dashboard/layout.php';
    }
 
    public function delete()
    {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
        }
        $producto = new Productos();
        $producto->setId($id);
        $this->model->EliminarProducto($producto);
    }
    public function ViewNuevo()

    {   
        $ObjTipoPersonal = $this->model->cbxCategoria();
        include_once '../../View/Dashboard/NuevoProducto.php';
        include_once '../../View/Dashboard/layout.php';
    }
    public function viewEditar(){
        $ObjTipoPersonal = $this->model->cbxCategoria();
        $id = $_GET['id'];
        $productoDetalle = new Productos();
        $productoDetalle->setId($id);
        $ObjTipoPersonal = $this->model->DetalleProducto($productoDetalle);
        include_once '../../View/Dashboard/EditarProducto.php';
        include_once '../../View/Dashboard/layout.php';
    }
    public function update(){
        if(isset($_POST["nombre"])) {$nombre = $_POST["nombre"];}
        if(isset($_POST["descripcion"])) {$descripcion = $_POST["descripcion"];}
        if(isset($_POST["calificacion"])) {$calificacion = $_POST["calificacion"];}
        if(isset($_POST["precio"])) {$precio = $_POST["precio"];}
        if(isset($_POST["descuento"])) {$descuento = $_POST["descuento"];}
        if(isset($_POST["estado"])) {$estado = $_POST["estado"];}
        if(isset($_POST["imagen"])) {$imagen = $_POST["imagen"];}
        if(isset($_POST["categoria"])) {$categoria = $_POST["categoria"];}
        if(isset($_POST["id"])) {$id = $_POST["id"];}
        $productos = new Productos();
        $productos->setNombre($nombre);
        $productos->setDescripcion($descripcion);
        $productos->setCalificacion($calificacion);
        $productos->setPrecio($precio);
        $productos->setDescuento($descuento);
        $productos->setEstado($estado);
        $productos->setImagen($imagen);
        $productos->setCategoriId($categoria);
        $productos->setId($id);        
        $this->model->ActualizarProducto($productos);
    }


    public function add(){
        if(isset($_POST["nombre"])) {$nombre = $_POST["nombre"];}
        if(isset($_POST["descripcion"])) {$descripcion = $_POST["descripcion"];}
        if(isset($_POST["calificacion"])) {$calificacion = $_POST["calificacion"];}
        if(isset($_POST["precio"])) {$precio = $_POST["precio"];}
        if(isset($_POST["descuento"])) {$descuento = $_POST["descuento"];}
        if(isset($_POST["estado"])) {$estado = $_POST["estado"];}
        if(isset($_POST["imagen"])) {$imagen = $_POST["imagen"];}
        if(isset($_POST["categoria"])) {$categoria = $_POST["categoria"];}
        $productos = new Productos();
        $productos->setNombre($nombre);
        $productos->setDescripcion($descripcion);
        $productos->setCalificacion($calificacion);
        $productos->setPrecio($precio);
        $productos->setDescuento($descuento);
        $productos->setEstado($estado);
        $productos->setImagen($imagen);
        $productos->setCategoriId($categoria);       
        $this->model->RegistrarProducto($productos);
    }

    
 }