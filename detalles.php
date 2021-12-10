<?php 
require 'View/snippets/css.php';
require 'configD.php';
require 'Util/Conection.php';
$db = new Conexion();
$con = $db->getConexion();

$id = isset($_GET ['id']) ? $_GET['id']: '';
$token = isset($_GET['token']) ? $_GET['token']: '';

if($id == '' || $token == ''){
    echo 'Error al procesar la peticion';
    exit;
}else{
    
    $token_tmp = hash_hmac('sha1',$id, KEY_TOKEN);
    
    if($token == $token_tmp){
        
        $sql = $con->prepare("SELECT count(id) FROM productos WHERE id=?");
        $sql->execute([$id]);
        //if ($sql->fetchColum() > 0){
            
            $sql = $con->prepare("SELECT nombre, descripcion, precio FROM productos WHERE id=?");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $dir_imagen = 'Public/asset/img/productos/'.$id.'/principal.jpg';
        //}
        
    }else{
        echo 'Error al procesar la peticion';
        exit;
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
        <center>
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">
                   <img src="<?php echo $dir_imagen; ?>" class="d-block w-100">
                </div>
                <div class="col-md-6 order-md-3" style="font-family:nunito, sans-serif; border:4px solid black">
                    <h2><?php echo $nombre; ?></h2>
                    <h2>S/<?php echo $precio; ?></h2>
                    <h2><?php echo $descripcion; ?></h2>
                    <button class="btn btn-outline-primary" type="button" onclick="addProducto(<?php echo $id; ?>, '<?php $token_tmp; ?>')">Agregar al carrito</button>
                </div> 
            </div>
           
        </div>
        </center>
    </section>
    <script>
        function addProducto(id, token){
            let url = 'carrito.php'
            let formData = new FormData()
            formData.append('id', id)
            formData.append('token', token)
            
            fetch(url,{
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(response => response.json())
              .then(data => {
                if(data.ok){
                    let elemento = document.getElementById("num_cart")
                    elemento.innerHTML = data.numero;
                    
                }
            })
        }
    </script>
    <!-- Pie de seccion-->
    <?php include "View/snippets/footer.php"?>
</body>

</html>


