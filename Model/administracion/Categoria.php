<?php

class Categoria{
    public $id,$nombre;
    public function setId($id){
        return $this->id = $id;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
}