<?php
require_once 'Util/Conection.php';
require_once 'administracion/Productos.php';
 
class WebDAO{
    public function ListaProductos()
    {
        try {
            $cn= new Conexion();
            $pdo = $cn->getConexion();
            $rs = $pdo->query("SELECT * FROM productos");            
            $lista = array();
            while ($row = $rs->fetch()) {
                $lista[] = $row;
                $_SESSION['ListaProductos'] = $lista;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $lista;
    }
    public function ListaCategorias()
    {
        try {
            $cn= new Conexion();
            $pdo = $cn->getConexion();
            $rs = $pdo->query("SELECT * FROM categoria");            
            $lista = array();
            while ($row = $rs->fetch()) {
                $lista[] = $row;
                $_SESSION['ListaCategorias'] = $lista;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $lista;
    }
    public function DetalleProducto(Productos $producto){
        try {
            $cn = new Conexion();
            $pdo = $cn->getConexion();
            $stmt= $pdo->prepare("SELECT * FROM productos WHERE ID=?");
            $stmt->bindParam(1,$producto->id); 
            $stmt->execute();
            $lista= array();
            while ($row = $stmt->fetch()){
                $lista[] = $row;
                $_SESSION['DProducto'] = $lista;
            }
           
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $lista;
    }
  

   
}