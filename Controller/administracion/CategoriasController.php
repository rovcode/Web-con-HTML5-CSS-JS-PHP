<?php
require_once '../../Model/CategoriaDAO.php';
require_once '../../Model/administracion/Categoria.php';
$ObjPersonal = new CategoriaDAO();
 class CategoriasController{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new CategoriaDAO();
    }
    public function Index()
    {      
        $ObjTipoPersonal = $this->model->ListaCategorias();
        include_once '../../View/Dashboard/ListaCategorias.php';
        include_once '../../View/Dashboard/layout.php';
    }

    public function delete_categoria()
    {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
        }      
        $categoria = new Categoria();
        $categoria->setId($id);
        $this->model->EliminarCategoria($categoria);
    }
    public function ViewNuevo()
    {   
        include_once '../../View/Dashboard/NuevaCategoria.php';
        include_once '../../View/Dashboard/layout.php';
    }
    public function EditarView()    
    {   
        $ObjTipoPersonal = $this->model->ListaCategorias();
        include_once '../../View/Dashboard/EditarCategoria.php';
        include_once '../../View/Dashboard/layout.php';
    }
    public function update_categoria(){
        if(isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
        }
        if(isset($_POST["id"])) {
            $id = $_POST["id"];
        }
        $categoria = new Categoria();
        $categoria ->setNombre($nombre);
        $categoria ->setId($id);      
        $this->model->ActualizarCategoria($categoria);
    }
    
    public function add(){
        if(isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
        }
        $categoria = new Categoria();
        $categoria ->setNombre($nombre);
        $this->model->RegistrarCategoria($categoria);
    }

    
 }