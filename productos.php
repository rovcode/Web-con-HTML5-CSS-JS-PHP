<?php 
require_once 'View/Dashboard/Router.php';
$URI = new Router();
$var = $_SERVER['REQUEST_URI'];
$URI->Route($var);
require_once 'config.php';
$Config = new Config();
?>
<?php include "View/snippets/head.php";?>
<style type="text/css">
 /* .producto-ms{
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    
 } */
</style>
<body>
    <!--Barra de navegacion-->
    <!--Navbar -->
    <?php include_once "View/snippets/menuv2.php";?>
    <!--/.Navbar -->

    <!-- Productos-->
    <!-- Products -->
    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Sidebar Left -->

                    <div class="sidebar_left clearfix">

                        <!-- Categories -->
                        <div class="sidebar_section">
                            <div class="sidebar_title">Categorías</div>
                            <div class="sidebar_section_content">
                                <ul>
                                    <?php 
                                      $categorias = $_SESSION['ListaCategorias']; 
                                      foreach($categorias as $value){
                                        ?>
                                         <li><a href="#"><?php echo $value['NOMBRE'];?></a></li>
                                        <?php
                                      }
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="product_sorting clearfix">                      
                        <div class="sorting">
                            <ul class="item_sorting">
                                <li>
                                    <span class="sorting_text">Filtrar</span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    <ul>
                                        <li class="product_sorting_btn"
                                            data-isotope-option='{ "sortBy": "original-order" }'><span>Todos</span>
                                        </li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
                                            <span>Precio</span>
                                        </li>
                                        <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'>
                                            <span>Calificación</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row products_container">
                <div class="col">
                    <!-- Products -->
                    <div class="product_grid row">
                       <?php
                                $lista = $_SESSION['ListaProductos']; 
                                foreach ($lista as $value)
                                {
                                    $id = $value['ID'];
                                    $precio = $value['PRECIO'];
                                    $nom = $value['NOMBRE'];
                                    $start = $value['CALIFICACION'];
                        ?>
                               <!-- Product -->
                        <div class="product  producto-ms">
                            <div class="product_image"><img src="Public/asset/v2/images/product_1.jpg" alt=""></div>
                            <div class="rating rating_4" data-rating="<?php echo  $start?>">
                                 <?php
                                  for ($i=1; $i <= $start; $i++) {?>
                                    <i class="fa fa-star"></i>
                                  <?php
                                  }

                                 ?>
                                <!-- <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> -->
                            </div>
                            <div class="product_content clearfix">
                                <div class="product_info">
                                    <div class="product_name"><a href="detalle?id=<?php echo $id?>"><?php echo  $nom?></a></div>
                                    <div class="product_price">S/. <?php echo  $precio?></div>
                                </div>
                                <div class="product_options">
                                    <div class="product_buy product_option"><img
                                            src="Public/asset/v2/images/shopping-bag-white.svg" alt=""></div>
                                    <div class="product_fav product_option">+</div>
                                </div>
                            </div>
                        </div>
                        <?php

                                }
                       ?>
                    </div>
                </div>
            </div>
            <div class="row page_num_container">
                <div class="col text-right">
                    <ul class="page_nums">
                        <li><a href="#">01</a></li>
                        <li class="active"><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Fin-->
    <script>
    function addProducto(id, token) {
        let url = 'carrito.php';
        let formData = new FormData();
        formData.append('id', id);
        formData.append('token', token);

        fetch(url, {
            method: 'POST',
            body: formData,
            mode: 'cors'
        }).then(response => response.json()).then(data => {
            if (data.ok) {
                let elemento = document.getElementById("carrito");
                elemento.innerHTML = data.numero;

            }
        });
    }
    </script>

    <!-- Pie de seccion-->
    <?php include "View/snippets/footer.php"?>