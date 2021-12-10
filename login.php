<?php include "View/snippets/head.php"?>
<style type="text/css">
html,
body {
    height: 100% !important;
}

#footer {
    display: none !important;
}

.mylogin {
    background-color: rgba(247, 237, 234, 0.5) !important;
    height: 100% !important;
}

.wrapper {
    width: 100% !important;
    height: 100% !important;
    background-image: url('Public/asset/v2/images/01.jpg');
    background-repeat: no-repeat;
    background-size: cover !important;

}

.form-control {
    border: none !important;
    border-bottom: solid 2px #C74C80 !important;
}

.form-control,
input::placeholder {
    background-color: transparent;
    color: #FFFFFF !important;


}

.css-input:focus {
    background: transparent !important;
    color: red;
}

.extra_1_button {
    color: #FFFFFF !important;
    cursor: pointer;
    font-weight: bold !important;
}

.extra_1_button:hover {
    color: #C74C80 !important;
}

.a_login {
    display: none !important;
}
.btn-registro{
    text-decoration: underline !important;
}
</style>

<body>

    <!--Barra de navegacion-->
    <!--Navbar -->
    <?php include_once 'View/snippets/menuv2.php';?>
    <!--/.Navbar -->
    <!--login-->
    <div class="wrapper">
        <div class="mylogin">
            <div class="container pt-5">
                <div class="row mt-5">
                    <!-- <div class="col-12 col-md-6 col-lg-6">
                    <h3 class="texto">¡Bienvenido!</h3>
                    <p class="texto">
                        En Magenta Style tenemos a tu disposición lo último en la moda.<br>
                        Ingresa a tu plataforma y disfruta de mayores beneficios.
                    </p>
                </div> -->
                    <div class="col-12 col-md-3 col-lg-3"></div>
                    <div class="col-12 col-md-6 col-lg-6 mt-md-5">
                        <div class="card-login p-3 ">
                            <div class="text-center">
                                <img src="Public/asset/img/ico.ico" alt=""
                                    class="img-responsive img-fluid img-centered img-circle "
                                    style="border-radius:50%;height:50px !important; width:50px !important" />
                            </div>
                            <h3 class="text-white text-center font-weight-bold">¡Bienvenido!</h3>
                            <p class="text-white  text-center">
                                En Magenta Style tenemos a tu disposición lo último en la moda.<br>
                                Ingresa a tu plataforma y disfruta de mayores beneficios.
                            </p>
                            <form action="Model/helper/HelperPersonal.php" method="post"> 
                             <input type="hidden" name="option" value="login_como_usuario">
                                <div class="form-group">
                                    <label for="" class="text-white font-weight-bold d-none"> Usuario </label>
                                    <input class="form-control css-input" type="text" name="txtusu"
                                        placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                    <label for="" class="text-white font-weight-bold d-none"> Contraseña </label>
                                    <input class="form-control css-input" type="password" name="txtpass"
                                        placeholder="Contraseña">
                                </div>

                                <div class="registrame mt-0" id="botones">
                                   
                                    <input type="submit" class="btn  button extra_1_button" value="Iniciar Sesion"
                                        name="btnlogin">
                                </div>
                                <div class="recuerdame text-white mt-3">
                                    <a class="mr-3 btn text-white btn-registro" href="<?php $Config->getRoute("registro.php");?> ">Registrarme</a>
                                    <a class="mr-3 btn text-white btn-registro" href="#" >Olvidó la contraseña?</a>
                                </div>
                                <?php if (isset($_GET['error'])) {?>
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <strong> <?php $mensaje = $_GET['error'];
    echo $mensaje;?>
                                    </strong>
                                </div> <?php }?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin login-->
    <?php include "View/snippets/footer.php"?>