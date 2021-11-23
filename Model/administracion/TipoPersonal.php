<?php

class TipoPersonal{

    public $codigo,$nombre, $detalle, $tipo;
    //Get
    public function getNombre(){ 
        return $this->nombre;
    } 
    public function getDetalle(){
        return $this->detalle;
    }
    public function getTipo(){
        return $this->tipo;
    }
    //Set
    public function setCodigo($codigo){
        return $this->codigo = $codigo;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    public function setDetalle($detalle){
        return $this->detalle = $detalle;
    }
    public function setTipo($tipo){
        return $this->tipo = $tipo;
    }
}


?>