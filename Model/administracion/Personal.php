<?php

class Personal{
//Variabkes 
public $id,
$nombre,
$apellido,
$dni,
$usuario,
$password,
$fecha_nacimiento,
$correo,
$direccion,
$fecha_ingreso,
$fecha_salida,
$estado_usuario,
$tipo_usuario_id,
$menu_id;
//set
public function setId($id){
    return $this->id = $id;
}
public function setNombre($nombre){
    return $this->nombre = $nombre;
}
public function setApellido($apellido){
    return $this->apellido = $apellido;
}
public function setDNI($dni){
    return $this->dni = $dni;
}
public function setUsuario($usuario){
    return $this->usuario = $usuario;
}
public function setPassword($password){
    return $this->password = $password;
}
public function setFechaNacimiento($fecha_nacimiento){
    return $this->fecha_nacimiento = $fecha_nacimiento;
}
public function setCorreo($correo){
    return $this->correo = $correo;
}
public function setDireccion($direccion){
    return $this->direccion = $direccion;
}
public function setFechaIngreso($fecha_ingreso){
    return $this->fecha_ingreso = $fecha_ingreso;
}
public function setFechaSalida($fecha_salida){
    return $this->fecha_salida = $fecha_salida;
}
public function setEstadoUsuario($estado_usuario){
    return $this->estado_usuario = $estado_usuario;
}
public function setTipoUsuarioId($tipo_usuario_id){
    return $this->tipo_usuario_id = $tipo_usuario_id;
}
public function setMenuId($menu_id){
    return $this->menu_id = $menu_id;
}
//get
public function getId(){
    return $this->id;
}



}