 <?php
require_once '../../Model/PersonalDAO.php';
require_once '../../Model/administracion/Personal.php';
$ObjPersonal = new PersonalDAO();
 class PersonalController{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new PersonalDAO();
    }
    public function Index()
    {      
        $ObjTipoPersonal = $this->model->ListaPersonal();
        include_once '../../View/Dashboard/ListaPersonal.php';
        include_once '../../View/Dashboard/layout.php';
    }
    public function ViewNuevo()
    {   
        $ObjTipoPersonal = $this->model->cbxTipoPersonal();
        $ObjTipoPersonal = $this->model->cbxMenuPersonal();
        include_once '../../View/Dashboard/NuevoPersonal.php';
        include_once '../../View/Dashboard/layout.php';
    }
    public function addPersonal(){
        if(isset($_POST["nombre"])){ $nombre = $_POST["nombre"];}
        if(isset($_POST["apellido"])){ $apellido = $_POST["apellido"];}
        if(isset($_POST["dni"])){ $dni = $_POST["dni"];}
        if(isset($_POST["usuario"])){ $usuario = $_POST["usuario"];}
        if(isset($_POST["password"])){ $password = $_POST["password"];}
        if(isset($_POST["fecha_nacimiento"])){ $fecha_nacimiento = $_POST["fecha_nacimiento"];}
        if(isset($_POST["correo"])){ $correo = $_POST["correo"];}
        if(isset($_POST["direccion"])){ $direccion = $_POST["direccion"];}
        if(isset($_POST["fechaing"])){ $fechaing = $_POST["fechaing"];}
        if(isset($_POST["fechasal"])){ $fechasal = $_POST["fechasal"];}
        if(isset($_POST["estado"])){ $estado = $_POST["estado"];}
        if(isset($_POST["tipoPersonal"])){ $tipoPersonal = $_POST["tipoPersonal"];}
        if(isset($_POST["menuPersonal"])){ $menuPersonal = $_POST["menuPersonal"];}
        $personal = new Personal();
        $personal->setNombre($nombre);
        $personal->setApellido($apellido);
        $personal->setDNI($dni);
        $personal->setUsuario($usuario);
        $personal->setPassword($password);
        $personal->setFechaNacimiento($fecha_nacimiento);
        $personal->setCorreo($correo);
        $personal->setDireccion($direccion);
        $personal->setFechaIngreso($fechaing);
        $personal->setFechaSalida($fechasal);
        $personal->setEstadoUsuario($estado);
        $personal->setTipoUsuarioId($tipoPersonal);
        $personal->setMenuId($menuPersonal);         
        $ObjTipoPersonal = $this->model->AddPersonal_New($personal);
       
    }

    public function delete()
    {
        if (isset($_POST["id"])) {
            $id = $_POST["id"];
        }
        $personal = new Personal();
        $personal->setId($id);
        $this->model->EliminarPersonal($personal);
    }

     
 }