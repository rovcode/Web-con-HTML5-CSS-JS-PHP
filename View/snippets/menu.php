<?php  
require_once 'config.php'; 
$Config = new Config();
?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="<?php $Config->getRoute("index.php");?>"><img width="50" height="50" src="Public/asset/img/ico.ico" alt=""> Magenta
            Style</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <style type="text/css">
         
            @media (min-width: 768px) 
            {
                .navbar-nav.navbar-center 
                {
                position: absolute;
                left: 50%;
                transform: translatex(-50%);
                 } 
                     
            }
            

      
        </style>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbar-center">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php $Config->getRoute("index.php");?>">Inicio <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php $Config->getRoute("productos.php");?>">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php $Config->getRoute("sobremagenta.php");?>">Sobre Magenta Satyle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php $Config->getRoute("contacto.php");?>">Contacto</a>
                </li>
            </ul>
        </div>
        <div class="ml-2 login" id="login">
            <a href="<?php $Config->getRoute("login.php");?>" class="">
            <i class="fas fa-user" style="font-size:20px"></i>
        </a>
        </div>
        <div class="ml-2"><a href="<?php $Config->getRoute("carrito.php");?>"><i class="fas fa-shopping-basket" style="font-size:20px"></i>
        <span class="badge badge-danger notification">4</span>
    </a>
        </div>
    </nav>
</div>