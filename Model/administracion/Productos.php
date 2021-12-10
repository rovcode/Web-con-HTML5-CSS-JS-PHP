<?php

class Productos{
    public $id,$nombre,$descripcion,$calificacion,$precio,$descuento,$estado,$imagen,$categoria_id;
    public function setId($id){
        return $this->id = $id;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    public function setDescripcion($descripcion){
        return $this->descripcion = $descripcion;
    }
    public function setCalificacion($calificacion){
        return $this->calificacion = $calificacion;
    }
    public function setPrecio($precio){
        return $this->precio = $precio;
    }
    public function setDescuento($descuento){
        return $this->descuento = $descuento;
    }
    public function setEstado($estado){
        return $this->estado = $estado;
    }
    public function setImagen($imagen){
        return $this->imagen = $imagen;
    }
    public function setCategoriId($categoria_id){
        return $this->categoria_id = $categoria_id;
    }
}