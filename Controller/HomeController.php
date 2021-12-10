<?php 
require_once '../../Model/ProductosDAO.php';
require_once '../../Model/administracion/Productos.php';
  class HomeController {

    private $model;
    
    public function __CONSTRUCT(){
      $this->model = new ProductosDAO();
    }

    public function Index(){
      session_start();
        require_once '../../View/Dashboard/layout.php';
        require_once '../../View/Dashboard/dashboard.php';
        require_once '../../View/Dashboard/footer.php';
    }  
  
  

  }
?>