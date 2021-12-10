<?php
require_once '../../Util/Conection.php';
require_once 'administracion/Sesion.php';
class SesionDAO{

 public function IniciarSesion(Sesion $sesion){
    try {
        $cn= new Conexion();
        $pdo = $cn->getConexion();
        $stmt = $pdo->prepare("SELECT * FROM usuarios where USUARIO =? AND PASS = ?");
        $stmt->bindParam(1, $sesion->usuario);
        $stmt->bindParam(2, $sesion->password);
        $stmt->execute();
        $lista= array();
        while ($row = $stmt->fetch()){
            $lista[] = $row;
            $_SESSION['Login'] = $lista;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); 
    }
 }

}
