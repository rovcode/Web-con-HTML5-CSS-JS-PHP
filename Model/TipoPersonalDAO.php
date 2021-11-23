<?php
require_once '../../Util/Conection.php';
require_once 'administracion/TipoPersonal.php';
session_start();
class TipoPersonalDAO
{

    public function ListarTipoPersonal()
    {
        try {
            $cn = new Conexion();
            $pdo = $cn->getConexion();
            $rs = $pdo->query("SELECT * FROM titpopersonal");
            $lista = array();
            while ($row = $rs->fetch()) {
                $lista[] = $row;
                $_SESSION["ListaPersonal"] = $lista;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $lista;
    }
    public function RegistrarTipo(TipoPersonal $tipoPersonal) {
        try {
            $cn = new Conexion();
            $pdo = $cn->getConexion();
            $stmt= $pdo->prepare("INSERT INTO c3u2yq869upbm7xf.titpopersonal (NOMTIPO,DETALLE, TITPOUSUARIO) VALUES (?,?,?)");
            $stmt->bindParam(1,$tipoPersonal->nombre); 
            $stmt->bindParam(2,$tipoPersonal->detalle);   
            $stmt->bindParam(3,$tipoPersonal->tipo);          
            $stmt->execute();  
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function EliminarTipo(TipoPersonal $tipoPersonal){
       try {
        $cn = new Conexion();
        $pdo = $cn->getConexion();
        $stmt= $pdo->prepare("DELETE FROM c3u2yq869upbm7xf.titpopersonal WHERE ID=?");
        $stmt->bindParam(1,$tipoPersonal->codigo); 
        $stmt->execute();  
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
     }
    }
    
}
