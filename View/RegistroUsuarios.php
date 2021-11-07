<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "snippets/css.php"?>
    <title>Tienda Virtual</title>
</head>
<body id="wrapper-registro" >
    <div class="container p-5" >
      <!-- Registrarse -->
      <div class="row">
      <div class="col-12 col col-md-6">
            <img src="https://shivlab.com/images/Mobile_UI_UX-_Design_2.png" class="img-responsive img-fluid" alt="">

        </div>
        <div id="registrarse" class="col-12 col-md-6">
            <h1>Registrarse</h1>
            <form action="#" method="post">
            <div class="fila-arriba">
                <div class="contenedor-input">
                <label>
                    Nombre <span class="req">*</span>
                </label>
                <input type="text" required>
                </div>

                <div class="contenedor-input">
                <label>
                    Apellido <span class="req">*</span>
                </label>
                <input type="text" required>
                </div>
            </div>
            <div class="contenedor-input">
                <label>
                Usuario <span class="req">*</span>
                </label>
                <input type="text" required>
            </div>
            <div class="contenedor-input">
                <label>
                Email <span class="req">*</span>
                </label>
                <input type="email" required>
            </div>
            <div class="contenedor-input">
                <label>
                Contraseña <span class="req">*</span>
                </label>
                <input type="password" required>
            </div>

            <div class="contenedor-input">
                <label>
                Repetir Contraseña <span class="req">*</span>
                </label>
                <input type="password" required>
            </div>

            <input type="submit" class="button button-block" value="Registrarse">
            </form>
        </div>
       
      </div>

    </div>
  </div>

    </div>
  <?php include "snippets/js.php"?>
</body>
</html>