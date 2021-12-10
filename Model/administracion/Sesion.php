<?php

 class Sesion{
     public $usuario,$password;
     public function setUsuario($usurio){
         return $this->usuario = $usurio;
     }
     public function setPassword($password){
         return $this->password = $password;
     }
 }
