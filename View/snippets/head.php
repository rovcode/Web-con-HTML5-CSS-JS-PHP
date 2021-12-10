<?php  
require_once 'config.php'; 
$Config = new Config();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ddb293">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="Public/asset/img/ico.jpg">
    <?php include "css.php"?>
    <link rel="shortcut icon" href="Public/asset/img/ico.ico">
    <title><?php $Config->setName()?></title>
</head>