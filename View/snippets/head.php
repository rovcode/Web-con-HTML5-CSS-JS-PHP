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
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <link rel="shortcut icon" type="image/png" href="Public/asset/img/ico.jpg">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">    
    <link rel="apple-touch-icon" href="Public/asset/img/ico.jpg">
    <?php include "css.php"?>
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="Public/asset/img/ico.ico">
    <script src="./script.js"></script>
    <title><?php $Config->setName()?></title>
</head>