<?php

class Usuario{

    public $id,
    $nombres,
    $apellidos,
    $fechanac,
    $usuario_u,
    $password,
    $telefono,
    $correo,
    $tipouser,
    $datosentrega;

    public function setId($id){
        return $this->id = $id;
    }
    public function setNombre($nombres){
        return $this->nombres = $nombres;
    }
    public function setApellido($apellidos){
        return $this->apellidos = $apellidos;
    }
    public function setFechanac($fechanac){
        return $this->fechanac = $fechanac;
    }
    public function setUsuario($usuario_u){
        return $this->usuario_u = $usuario_u;
    }
    public function setPassword($password){
        return $this->password = $password;
    }
    public function setTel($telefono){
        return $this->telefono = $telefono;
    }
    public function setCorreo($correo){
        return $this->correo = $correo;
    }
    public function setTipoUsuario($tipouser){
        return $this->tipouser = $tipouser;
    }
    public function setDatosEntrega($datosentrega){
        return $this->datosentrega = $datosentrega;
    }
}

?>