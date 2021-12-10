<?php 
require_once 'Model/webDAO.php';
require_once 'Model/administracion/Productos.php';
  class WebController {

    private $model;
    
    public function __CONSTRUCT(){
      $this->model = new WebDAO();
    }

    public function Index(){
        require_once '../../View/Dashboard/layout.php';
        require_once '../../View/Dashboard/dashboard.php';
        require_once '../../View/Dashboard/footer.php';
    }  
    public function IndexWebPrincipal()
    {      
        $ObjTipoPersonal = $this->model->ListaProductos();
        $ObjTipoPersonal = $this->model->ListaCategorias();
        include_once 'productos.php';        
    }
  

  }
?>