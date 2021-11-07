<?php

require_once '../UTIL/ConexionBD.php';

require_once '../BEAN/PersonaBean.php';

class PersonaDAO{

    public function ActualizarPersona(PersonaBean $objPersonabean){

        $estado=1;
    
        try 
    
        { $objcd=new ConexionBD();
          $pdo=$objcd->getConexionBD(); //Conexion con la base de datos
    
          $stmt=$pdo->prepare("UPDATE persona SET nombre=?, apellido=?, edad=?, sexo=? where codigo=?;");
          $stmt->bindParam(1,$objPersonabean->nombre);
          $stmt->bindParam(2,$objPersonabean->apellido);
          $stmt->bindParam(3,$objPersonabean->edad);
          $stmt->bindParam(4,$objPersonabean->sexo);
          $stmt->bindParam(5,$objPersonabean->codigo);
          $stmt->execute();     
    
        } catch (PDOException $e) 
        {  
         echo $e->getMessage();
          $estado=0;
    
        } 
    
        return $estado;
    
      }

}

