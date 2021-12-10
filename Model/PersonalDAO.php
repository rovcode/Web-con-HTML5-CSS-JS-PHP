<?php
require_once '../../Util/Conection.php';
require_once 'administracion/Personal.php';
 
class PersonalDAO{
    public function ListaPersonal()
    {
        try {
            $cn= new Conexion();
            $pdo = $cn->getConexion();
            $rs = $pdo->query("SELECT * FROM personal");            
            $lista = array();
            while ($row = $rs->fetch()) {
                $lista[] = $row;
                $_SESSION['ListaPersonal_table'] = $lista;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $lista;
    }
    public function AddPersonal_New(Personal $personal){
        try {
           
            $cn = new Conexion();
            $pdo = $cn->getConexion();
            $stmt= $pdo->prepare("INSERT INTO personal (NOMBRES,APELLIDOS,DNI,USUARIO ,PASS,FECHANAC,CORREO,DIRECCION,FECHAINGRESO,FECHASALIDA,ESTADOUSUARIO,TITPOUSUARIO_ID,MENU_PARAMETROS_ID) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");          
            $stmt->bindParam(1,$personal->nombre); 
            $stmt->bindParam(2,$personal->apellido);   
            $stmt->bindParam(3,$personal->dni);
            $stmt->bindParam(4,$personal->usuario); 
            $stmt->bindParam(5,$personal->password);   
            $stmt->bindParam(6,$personal->fecha_nacimiento);      
            $stmt->bindParam(7,$personal->correo); 
            $stmt->bindParam(8,$personal->direccion);   
            $stmt->bindParam(9,$personal->fecha_ingreso);      
            $stmt->bindParam(10,$personal->fecha_salida); 
            $stmt->bindParam(11,$personal->estado_usuario);    
            $stmt->bindParam(12,$personal->tipo_usuario_id);   
            $stmt->bindParam(13,$personal->menu_id);
             
            $stmt->execute();            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function EliminarPersonal(Personal $personal){
        try {
         $cn = new Conexion();
         $pdo = $cn->getConexion();
         $stmt= $pdo->prepare("DELETE FROM personal WHERE ID=?");
         $stmt->bindParam(1,$personal->id); 
         $stmt->execute();  
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
      }
    }
    //Llenando cbx
    public function cbxTipoPersonal()
    {
        try {
            $cn= new Conexion();
            $pdo = $cn->getConexion();
            $rs = $pdo->query("SELECT * FROM titpopersonal");            
            $lista = array();
            while ($row = $rs->fetch()) {
                $lista[] = $row;
                $_SESSION['cbxTipoPersonal'] = $lista;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $lista;
    }
    public function cbxMenuPersonal()
    {
        try {
            $cn= new Conexion();
            $pdo = $cn->getConexion();
            $rs = $pdo->query("SELECT * FROM menu_parametros");            
            $lista = array();
            while ($row = $rs->fetch()) {
                $lista[] = $row;
                $_SESSION['cbxMenuParametros'] = $lista;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $lista;
    }
}