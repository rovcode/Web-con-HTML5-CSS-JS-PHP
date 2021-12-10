<?php
require_once '../../Model/SesionDAO.php';
require_once '../../Model/administracion/Sesion.php';
class LoginController{
 
  private $model;    
  public function __CONSTRUCT(){
    $this->model = new SesionDAO();
  }
  // public function Index(){
  //   require_once '../../View/Dashboard/layout.php';
  //   require_once '../../View/Dashboard/dashboard.php';
  // }  
  public function Login(){
    if(isset($_POST['txtusu'])){ $u = $_POST['txtusu'];}
    if(isset($_POST['txtpass'])){ $p = $_POST['txtpass'];}
    $sesion = new Sesion();
    $sesion->setUsuario($u);
    $sesion->setPassword($p);
    
    $this->model->IniciarSesion($sesion);
   
    if(isset( $_SESSION['Login'])){
      header("Location:../../View/Dashboard/index.php");
    }else{
      header("Location:../../login.php?error=Usuarios incorrectos");
    }
    

  }



}




?>
