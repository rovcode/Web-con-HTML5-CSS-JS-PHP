<?php
require_once '../../View/Dashboard/Router.php';
if(isset($_POST['option'])){
    $URI = new Router();
   $accion = $_POST['option'];
   $URI->Route($accion);
}else{
    $URI = new Router();
    $var = $_SERVER['REQUEST_URI'];
    $URI->Route($var);
}
?>