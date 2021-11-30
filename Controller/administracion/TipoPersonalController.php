<?php
require_once '../../Model/TipoPersonalDAO.php';
require_once '../../Model/administracion/TipoPersonal.php';
$ObjTipoPersonal = new TipoPersonalDAO();

class TipoPersonalController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new TipoPersonalDAO();
    }

    public function Index()
    {      
        $ObjTipoPersonal = $this->model->ListarTipoPersonal();
        include_once '../../View/Dashboard/tipoPersonal.php';
        include_once '../../View/Dashboard/layout.php';
    }
    public function viewRegistro()
    {     
        include_once '../../View/Dashboard/NuevoTipoPersonal.php';
        include_once '../../View/Dashboard/layout.php';
    }
    public function viewEditar(){
      $id = $_GET['id'];
      $TipoPersonal = new TipoPersonal();
      $TipoPersonal->setCodigo($id);
      $ObjTipoPersonal = $this->model->DetalleTipo($TipoPersonal);
      include_once '../../View/Dashboard/EditarTipoPersonal.php';
      include_once '../../View/Dashboard/layout.php';
    }
    public function add()
    {
        if (isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
        }
        if (isset($_POST["detalle"])) {
            $detalle = $_POST["detalle"];
        }
        if (isset($_POST["tipo"])) {
            $tipo = $_POST["tipo"];
        }
        $TipoPersonal = new TipoPersonal();
        $TipoPersonal->setNombre($nombre);
        $TipoPersonal->setDetalle($detalle);
        $TipoPersonal->setTipo($tipo);
        $this->model->RegistrarTipo($TipoPersonal);
    }
    public function UpdateAdd()
    {
        if (isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
        }
        if (isset($_POST["detalle"])) {
            $detalle = $_POST["detalle"];
        }
        if (isset($_POST["tipo"])) {
            $tipo = $_POST["tipo"];
        }
        if (isset($_POST["id"])) {
          $id = $_POST["id"];
        }
      
        $TipoPersonalUpdate = new TipoPersonal();
        $TipoPersonalUpdate->setCodigo($id);
        $TipoPersonalUpdate->setNombre($nombre);
        $TipoPersonalUpdate->setDetalle($detalle);
        $TipoPersonalUpdate->setTipo($tipo);
       $this->model->ActualizarTipo($TipoPersonalUpdate);
    }
    public function delete()
    {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
        }
        $TipoPersonal = new TipoPersonal();
        $TipoPersonal->setCodigo($id);
        $this->model->EliminarTipo($TipoPersonal);
    }


}
