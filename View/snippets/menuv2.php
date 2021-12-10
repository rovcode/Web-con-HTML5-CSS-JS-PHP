<?php  
require_once 'config.php'; 
$Config = new Config();
?>
<!-- Header -->
<style type="text/css">
    .active a{
        color: #937c6f !important;
        font-weight: bold !important;
    }
</style>
<header class="header">
    <div class="header_inner d-flex flex-row align-items-center justify-content-start">
        <div class="logo"><a href="<?php $Config->getRoute("index.php");?>" style="font-size:18px !important"><img
                    width="50" height="50" src="Public/asset/img/ico.ico" alt="" /> Magenta Style</a></div>
        <nav class="main_nav">
            <ul>
                <li id="inicio" class="active"><a href="<?php $Config->getRoute("index.php");?>">Inicio</a></li>
                <li id="productos"><a href="<?php $Config->getRoute("productos.php");?>">Productos</a></li>
                <li id="nosotros"><a href="<?php $Config->getRoute("sobremagenta.php");?>">Nosotros</a></li>
                <li id="contacto"><a href="<?php $Config->getRoute("contacto.php");?>">Contacto</a></li>
            </ul>
        </nav>
        <div class="header_content ml-auto">
            <div class="search header_search">
                <form action="#">
                    <input type="search" class="search_input" required="required">
                    <button type="submit" id="search_button" class="search_button"><img
                            src="images/magnifying-glass.svg" alt=""></button>
                </form>
            </div>
            <div class="shopping">
                <!-- Cart -->
                <a href="#">
                    <div class="cart">
                        <img src="Public/asset/v2/images/shopping-bag.svg" alt="">
                        <div class="cart_num_container">
                            <div class="cart_num_inner">
                                <div class="cart_num">1</div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Star -->
                <!-- <a href="#">
						<div class="star">
							<img src="images/star.svg" alt="">
							<div class="star_num_container">
								<div class="star_num_inner">
									<div class="star_num">0</div>
								</div>
							</div>
						</div>
					</a> -->
                <!-- Avatar -->
                <a class="a_login" href="<?php $Config->getRoute("login.php");?>">
                    <div class="avatar">
                        <img src="Public/asset/v2/images/avatar.svg" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</header>

<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container">
        <div class="menu_close">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="logo menu_mm"><a href="<?php $Config->getRoute("index.php");?>" style="font-size:18px !important"><img
                    width="50" height="50" src="Public/asset/img/ico.ico" alt="" /> Magenta Style</a></div>
    <div class="search">
        <form action="#">
            <input type="search" class="search_input menu_mm" required="required">
            <button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm"
                    src="images/magnifying-glass.svg" alt=""></button>
        </form>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li><a href="<?php $Config->getRoute("index.php");?>">Inicio</a></li>
            <li><a href="<?php $Config->getRoute("productos.php");?>">Productos</a></li>
            <li><a href="<?php $Config->getRoute("sobremagenta.php");?>">Nosotros</a></li>
            <li><a href="<?php $Config->getRoute("contacto.php");?>">Contacto</a></li>
        </ul>
    </nav>
</div>