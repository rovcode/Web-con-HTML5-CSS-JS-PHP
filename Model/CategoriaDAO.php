<?php
require_once '../../Util/Conection.php';
require_once 'administracion/Categoria.php';
 
class CategoriaDAO{
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
    public function RegistrarCategoria(Categoria $categoria) {
        try {
            $cn = new Conexion();
            $pdo = $cn->getConexion();
            $stmt= $pdo->prepare("INSERT INTO categoria (NOMBRE) VALUES (?)");
            $stmt->bindParam(1,$categoria->nombre);        
            $stmt->execute();  
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function ActualizarCategoria(Categoria $categoria) {
        try {
            $cn = new Conexion();
            $pdo = $cn->getConexion();
            $stmt= $pdo->prepare("UPDATE  categoria SET NOMBRE=? WHERE ID=?");
            $stmt->bindParam(1,$categoria->nombre);
            $stmt->bindParam(2,$categoria->id);         
            $stmt->execute();  
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    

    public function EliminarCategoria(Categoria $categoria){
        try {
         $cn = new Conexion();
         $pdo = $cn->getConexion();
         $stmt= $pdo->prepare("DELETE FROM categoria WHERE ID=?");
         $stmt->bindParam(1,$categoria->id);
         $stmt->execute();  
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
      }
    }
}