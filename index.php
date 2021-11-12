<?php include "View/snippets/head.php"?>

<body>

    <!--Barra de navegacion-->
    <!--Navbar -->
    <?php include_once 'View/snippets/menu.php';?>
    <!--/.Navbar -->
    <!--Encabezado-->
    <div class="wrapper ">
        <div id="carouselExampleIndicators" class="carousel slide mt-7"  data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
            </ol>

            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img class="d-block w-100 m-menu"
                        src="https://livedemo00-opencart.template-help.com/opencart_prod-12337/skin1/image/cache/catalog/slide-1-2050x1068.jpg"
                        alt="Second slide">
                        <div class="carousel-caption d-none d-md-block" id="textoSlider">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 m-menu" 
                        src="https://livedemo00-opencart.template-help.com/opencart_prod-12337/skin1/image/cache/catalog/slide-3-2050x1068.jpg"
                        alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Seed slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            </div>

            </a>
        </div>
    </div>
    <section class="sobreMagenta" style="height:300px;background-color:#ddb293;">

    </section>

    <?php include "View/snippets/footer.php"?>
</body>

</html>