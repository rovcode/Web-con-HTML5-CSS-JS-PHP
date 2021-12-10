<div class="divider m-2" style="border:solid 1px #937C6F"></div>
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="footer_logo"><a href="#">Magenta Style</a></div>
                <nav class="footer_nav">
                    <ul>
                        <li><a href="<?php $Config->getRoute("index.php");?>">Inicio</a></li>
                        <li><a href="<?php $Config->getRoute("productos.php");?>">Productos</a></li>
                        <li><a href="<?php $Config->getRoute("sobremagenta.php");?>">Nosotros</a></li>
                        <li><a href="<?php $Config->getRoute("contacto.php");?>">Contacto</a></li>
                    </ul>
                </nav>
                <div class="footer_social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="copyright">
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> | Todos los derechos reservados
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<?php include_once "js.php"?>


</html>