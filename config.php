<?php
$path = "";
$ruta = "";
class Config
{

    public function getRoute($ruta)
    {
        $newRuta = "" . $ruta . "";
        echo $newRuta;

    }
    public function setName()
    {
        $var = $_SERVER['REQUEST_URI'];
        $partesURI = explode('/', $var);
        array_shift($partesURI);
        $totalURI = count($partesURI);
        for ($i = 0; $i < count($partesURI); $i++) {
            $uri = $partesURI[$totalURI - 1];
            $name = explode('.', $uri);
            $newName = ucfirst($name[0]);
            $NombreFinal = ($newName == "Index") ? $newName = "Magenta Style" : "Magenta : " . $newName;
            echo $NombreFinal;
            break;
        }
        //print_r($partesURI[1]) ;
    }

}
