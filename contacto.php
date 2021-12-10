<?php include "View/snippets/head.php"?>
<style type="text/css">
/* .producto-ms{
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    
 } */
</style>
<body>
    <!--Barra de navegacion-->
    <!--Navbar -->
    <?php include_once 'View/snippets/menuV2.php';?>
    <!--/.Navbar -->
    <?php

use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

require 'Public/PHPMailer/src/PHPMailer.php';
require 'Public/PHPMailer/src/SMTP.php';
require 'Public/PHPMailer/src/Exception.php';

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    
    $errors = array();
    
    if(empty($nombre)){
        $errors[] = 'El campo nombre es obligatorio';
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = 'La direccion de correo electronico no es valida';
    }
    
    if(empty($asunto)){
        $errors[] = 'El campo asunto es obligatorio';
    }
    
    if(empty($mensaje)){
        $errors[] = 'El campo mensaje es obligatorio';
    }
    
    if(count($errors) == 0 ){
        $msj = "De: $nombre <a href='mailto:$email'>$email</a><br>";
        $msj .= "Asunto: $asunto <br><br>";
        $msj .= "Cuerpo del mensaje:";
        $msj .= '<p>'.$mensaje.'</p>';
        $msj .= "--<p> Este mensaje se ha enviado desde un formulario de contacto de Magenta Style. </p>";
        
        $mail = new PHPMailer(true);
        
        try{
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'noreply.magentastyle@gmail.com';
            $mail->Password = 'MagentaS1';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            
            $mail->setFrom('noreply.magentastyle@gmail.com', 'Contacto');
            $mail->addAddress('velasquezcordovar@gmail.com', 'Contacto');
            $mail->isHTML(true);
            $mail->Subject = 'Formulario de contacto';
            $mail->Body = $msj;
            $mail->send();
            
            $respuesta = 'Correo enviado';
        } catch (Exception $e) {
            $respuesta = 'Mensaje'.$mail->ErrorInfo;

        }
    }
}

?>

        
        <main class="mt-5 pt-5">
            <div class="container py-3 mt-5">
                <header class="mb-4 border-bottom">
                    <h1 class="fs-4"> Contacto Magenta </h1>
                </header>
                
                <?php 
                
                if(isset($errors)){
                    if(count($errors)>0){
                ?>
                
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <?php 
                            foreach($errors as $error){
                                echo $error.'<br>';
                            }
                            
                            ?>
                        </div>
                    </div>
                </div>
                
                <?php
                    }
                }
                
                ?>
                
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <form class="form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                            <div class="mb-3">
                                <label for="nombre" class="form-label"> Nombre </label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"> Correo electronico </label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="asunto" class="form-label"> Asunto </label>
                                <input type="text" class="form-control" id="asunto" name="asunto" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label"> Mensaje </label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
                            </div>
                            
                            <button type="submit" name="submit" class="button gallery_button"> Enviar </button>
                        </form>
                    </div>
                </div>
                <?php if(isset($respuesta)) { ?>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <?php echo $respuesta; ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </main>
  
<body>
<!-- Pie de seccion-->
<?php include "View/snippets/footer.php"?>