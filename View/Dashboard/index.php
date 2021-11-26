<?php 
  require_once 'Router.php';
  $URI = new Router();
  $var = $_SERVER['REQUEST_URI'];
  $URI->Route($var);
?>