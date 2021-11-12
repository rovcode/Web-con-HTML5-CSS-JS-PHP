<?php include "snippets/head.php"?>
<body>
    <!--Barra de navegacion-->
    <!--Navbar -->
    <?php include_once 'snippets/menu.php';?>
    <!--/.Navbar -->
    <!--Encabezado-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Prendas 
                   
                </h1>
                <p class="lead fw-normal text-white-50 mb-0">
                <?php
                      require_once 'Util/Conection.php';
                      $con = new Conexion();
                      $con->getConexion();
                    ?> 
                    </p>
            </div>
        </div>
    </header>
    <!-- Productos seccion-->
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus, quasi impedit. Illum veritatis, magni temporibus deserunt dolor, ipsum voluptatem sequi repudiandae, optio doloribus soluta ut quos laborum! Placeat, consectetur omnis.
    <!-- Pie de seccion-->
    <?php include "snippets/footer.php"?>
</body>

</html>