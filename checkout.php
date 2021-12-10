<?php 
require 'configD.php';
require 'Util/Conection.php';
$db = new Conexion();
$con = $db->getConexion();

$productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;
$lista_carrito = array();

if($productos != null){
    foreach($productos as $clave => $cantidad){
        
        $sql = $con->prepare("SELECT id, nombre, precio, $cantidad AS cantidad FROM productos WHERE id=?");
        $sql->execute([$clave]);
        $lista_carrito = $sql->fetchAll(PDO::FETCH_ASSOC);
    }  
} 




?>
<?php include "View/snippets/head.php"?>
<body>
    <!--Barra de navegacion-->
    <!--Navbar -->
    <?php include_once 'View/snippets/menu.php';?>
    <!--/.Navbar -->
    <!--Encabezado-->
    <header class="bg-white py-4">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"></h1>
                <p class="lead fw-normal text-white-50 mb-0"></p>
            </div>
        </div>
    </header>
    <!-- Productos seccion-->
    <section class="py-5">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($lista_carrito == null){
                            echo '<tr><td colspan="5" class="text-center"><b>Lista vacia</b></td></tr>';
                        }else{
                          $total = 0;
                          foreach($lista_carrito as $producto){
                              $_id = $producto['id'];
                              $nombre = $producto['nombre'];
                              $precio = $producto['precio'];
                              $subtotal = $cantidad;
                              $total += $subtotal;
                        ?>
                        
                        <tr>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $precio; ?></td>
                            <td>
                                <input type="number" min="1" max="10" step="1" value="<?php echo $cantidad ?>"
                                       size="5" id="cantidad<?php echo $_id ?>" onchange="">
                            </td>
                            <td><?php echo $subtotal; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </section>
    <script>
        function addProducto(id, token){
            let url = 'carrito.php';
            let formData = new FormData();
            formData.append('id',id);
            formData.append('token',token);
            
            fetch(url,{
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(response => response.json()).then(data=>{
                if(data.ok){
                    let elemento = document.getElementById("carrito");
                    elemento.innerHTML = data.numero;
                    
                }
            });
        }
    </script>
    
    <!-- Pie de seccion-->
    <?php include "View/snippets/footer.php"?>
</body>

</html>


