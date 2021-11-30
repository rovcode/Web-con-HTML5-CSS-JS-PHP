<?php
class Router
{

    public function Route($var)
    {
        //$var = $_SERVER['REQUEST_URI'];
        $partesURI = explode('/', $var);
        array_shift($partesURI);
        $totalURI = count($partesURI);
        for ($i = 0; $i < count($partesURI); $i++) {
            $uriAccion = $partesURI[$totalURI - 1];
            $nameAccion = explode('.', $uriAccion);
            $action = ucfirst($nameAccion[0]);
            $uriController = $partesURI[$totalURI - 2];
            $nameController = explode('.', $uriController);
            $controller = ucfirst($nameController[0]);
            break;
        }
        if ($action === "Index" || $controller === "") {
            $controller = "Home";
            require_once "../../Controller/" . $controller . "Controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->Index();

        }
        if ($action === "TipoPersonal") {
            $controller = "TipoPersonal";
            require_once "../../Controller/administracion/" . $controller . "Controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->Index();
        }
        if ($action === "NuevoTipoPersonal") {
            $controller = "TipoPersonal";
            require_once "../../Controller/administracion/" . $controller . "Controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->viewRegistro();
        }
        
        if ($action === "EditarTipoPersonal") {
            $controller = "TipoPersonal";
            require_once "../../Controller/administracion/" . $controller . "Controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->viewEditar();
        }
        if ($action === "HelperPersonal") {
            $controller = "TipoPersonal";
            require_once "../../Controller/administracion/" . $controller . "Controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->add();
        }
        if ($var === "Update") {
            $controller = "TipoPersonal";
            require_once "../../Controller/administracion/" . $controller . "Controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;          
            $controller->UpdateAdd();
        }
        if ($var === "Delete") {
            $controller = "TipoPersonal";
            require_once "../../Controller/administracion/" . $controller . "Controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->delete();
        }
        

    }

}
