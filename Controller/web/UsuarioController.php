<?php
require_once '../../Model/UsuarioDAO.php';
require_once '../../Model/web/Usuario.php';

$ObjPersonal = new UsuarioDAO();
class UsuarioController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new UsuarioDAO();
    }
    public function Registrarme()
    {
        if (isset($_POST["nombres"])) {$nombres = $_POST["nombres"];}
        if (isset($_POST["apellidos"])) {$apellidos = $_POST["apellidos"];}
        $fechanac = "0000/00/00";
        if (isset($_POST["usuario"])) {$usuario_u = $_POST["usuario"];}
        if (isset($_POST["password"])) {$password = $_POST["password"];}
        if (isset($_POST["telefono"])) {$telefono = $_POST["telefono"];}
        if (isset($_POST["correo"])) {$correo = $_POST["correo"];}
        $tipo = 1;
        $datosentrega = 1;
        $usuario = new Usuario();
        $usuario->setNombre($nombres);
        $usuario->setApellido($apellidos);
        $usuario->setFechanac($fechanac);
        $usuario->setUsuario($usuario_u);
        $usuario->setPassword($password);
        $usuario->setTel($telefono);
        $usuario->setCorreo($correo);
        $usuario->setTipoUsuario($tipo);
        $usuario->setDatosEntrega($datosentrega);
        
        if (isset($_POST['tyc']) && $_POST['tyc'] == '1') {
            $usuarioDAO = new UsuarioDAO();
            $usuarioDAO->RegistrarUsuario($usuario);
            session_start(); 
            header('Location:../../View/Dashboard/index.php');
        } else {
            header('Location:../../registro.php?mensaje=Existen datos vacíos o duplicados&&tyc=0');
        }

    }
}
