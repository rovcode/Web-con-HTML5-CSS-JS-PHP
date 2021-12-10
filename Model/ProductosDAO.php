<?php
require_once '../../Util/Conection.php';
require_once 'administracion/Productos.php';
 
class ProductosDAO{
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
    public function ActualizarProducto(Productos $producto){
        try {
            $cn = new Conexion();
            $pdo = $cn->getConexion();
            $stmt= $pdo->prepare("UPDATE productos SET NOMBRE=?,DESCRIPCION=?, CALIFICACION=?, PRECIO=?, DESCUENTO=?
            , ESTADO=?, IMAGEN=?, CATEGORIA_ID=? WHERE ID=?");
            $stmt->bindParam(1,$producto->nombre); 
            $stmt->bindParam(2,$producto->descripcion);   
            $stmt->bindParam(3,$producto->calificacion);
            $stmt->bindParam(4,$producto->precio); 
            $stmt->bindParam(5,$producto->descuento);   
            $stmt->bindParam(6,$producto->estado);
            $stmt->bindParam(7,$producto->imagen); 
            $stmt->bindParam(8,$producto->categoria_id);   
            $stmt->bindParam(9,$producto->id);
            var_dump($producto);
            $stmt->execute(); 
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function RegistrarProducto(Productos $productos) {
        try {
            $cn = new Conexion();
            $pdo = $cn->getConexion();
            $stmt= $pdo->prepare("INSERT INTO productos (NOMBRE,DESCRIPCION, CALIFICACION,PRECIO,DESCUENTO,ESTADO,IMAGEN,CATEGORIA_ID ) VALUES (?,?,?,?,?,?,?,?)");
            $stmt->bindParam(1,$productos->nombre); 
            $stmt->bindParam(2,$productos->descripcion);   
            $stmt->bindParam(3,$productos->calificacion);  
            $stmt->bindParam(4,$productos->precio); 
            $stmt->bindParam(5,$productos->descuento); 
            $stmt->bindParam(6,$productos->estado); 
            $stmt->bindParam(7,$productos->imagen); 
            $stmt->bindParam(8,$productos->categoria_id); 
                  
            $stmt->execute();
           
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function cbxCategoria()
    {
        try {
            $cn= new Conexion();
            $pdo = $cn->getConexion();
            $rs = $pdo->query("SELECT * FROM categoria");            
            $lista = array();
            while ($row = $rs->fetch()) {
                $lista[] = $row;
                $_SESSION['cbxListaCategorias'] = $lista;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $lista;
    }
    
    public function EliminarProducto(Productos $producto){
       try {
        $cn = new Conexion();
        $pdo = $cn->getConexion();
        $stmt= $pdo->prepare("DELETE FROM productos WHERE ID=?");
        $stmt->bindParam(1,$producto->id); 
        $stmt->execute();  
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
     }
    }
}