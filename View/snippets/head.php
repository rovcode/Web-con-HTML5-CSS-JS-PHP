<?php  
require_once 'configuracion.php'; 
$Config = new Config();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "css.php"?>
    <title><?php $Config->setName()?></title>
</head>