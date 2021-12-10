<?php
 require_once 'web/Usuario.php'; 
 require_once '../../Util/Conection.php';
 class UsuarioDAO {

    public function RegistrarUsuario(Usuario $datausuario) {
        try {
            $cn = new Conexion();
            $pdo = $cn->getConexion();
            $stmt= $pdo->prepare("INSERT INTO usuarios (NOMBRES,APELLIDOS, FECHANACIMIENTO,USUARIO,PASS,TELEFONO,CORREO,TIPOUSUARIO_ID,DATOSENTREGA_ID  ) 
            VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bindParam(1,$datausuario->nombres); 
            $stmt->bindParam(2,$datausuario->apellidos);   
            $stmt->bindParam(3,$datausuario->fechanac);  
            $stmt->bindParam(4,$datausuario->usuario_u); 
            $stmt->bindParam(5,$datausuario->password); 
            $stmt->bindParam(6,$datausuario->telefono); 
            $stmt->bindParam(7,$datausuario->correo); 
            $stmt->bindParam(8,$datausuario->tipouser); 
            $stmt->bindParam(9,$datausuario->datosentrega);
            $stmt->execute();
            session_start();
            $registro = $datausuario->nombres." ".$datausuario->apellidos;
            $_SESSION["NuevoUsuarioWeb"]=$registro;

           
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
     
 }


?>