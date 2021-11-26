<?php 
  class HomeController {

    private $model;
    
    public function __CONSTRUCT(){}

    public function Index(){
        require_once '../../View/Dashboard/layout.php';
        require_once '../../View/Dashboard/dashboard.php';
        require_once '../../View/Dashboard/footer.php';
    }    

  }
?>