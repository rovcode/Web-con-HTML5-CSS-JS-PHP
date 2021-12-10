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
    echo $action;
     /**************************************/
    /*          PERSONAL             */
    /*************************************/
    if($action=="ListaPersonal"){
        $this->HelpController("Personal")->Index();
    }
    if ($var === "DeletePersonal"){
        $this->HelpController("Personal")->delete(); 
    }
    if($action==="NuevoPersonal"){
        $this->HelpController("Personal")->ViewNuevo(); 
    }
    if($var==="New_Personal"){
        $this->HelpController("Personal")->addPersonal(); 
    }
     /**************************************/
    /*          categorias             */
    /*************************************/
    if($action=="ListaCategorias"){
        $this->HelpController("Categorias")->Index();
    }
    if($var=="Delete_Categoria"){
        $this->HelpController("Categorias")->delete_categoria();
    }
    if($action=="NuevaCategoria"){
        $this->HelpController("Categorias")->ViewNuevo();
    }
    if($var=="Nueva_Categoria"){
        $this->HelpController("Categorias")->add();
    }
    if($action=="EditarCategoria"){
        $this->HelpController("Categorias")->EditarView();
    }
    if($var=="Registrar_new_Categoria"){
        $this->HelpController("Categorias")->update_categoria();
    }
  
    
      /**************************************/
    /*          productos             */
    /*************************************/
    if($action=="ListaProductos"){
        $this->HelpController("Productos")->Index();
    }
    if($var=="DeleteProducto"){
        $this->HelpController("Productos")->delete();
    }
    if($action=="NuevoProducto"){
        $this->HelpController("Productos")->ViewNuevo();
    }
    if($var=="Registrar_Producto"){
        $this->HelpController("Productos")->add();
    }
    if($action=="EditarProducto"){
        $this->HelpController("Productos")->viewEditar();
    }
    if($var=="Actualizar_Producto"){
        $this->HelpController("Productos")->update();
    } 
    //controlando la web - vista usuario
    if($action=="Productos"){
        $controller = "Web";
        require_once "Controller/" . $controller . "Controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->IndexWebPrincipal();
    }
    if($var=="registrarme_como_usuario"){
        $controller = "Usuario";
        require_once "../../Controller/web/" . $controller . "Controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Registrarme();
    }
        /**************************************/
    /*          Login             */
    /*************************************/
    if($var=="login_como_usuario"){
        $controller = "Login";
        require_once "../../Controller/" . $controller . "Controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Login();
    }
    
    
    
    


    /**************************************/
    /*          TIPO PERSONAL             */
    /*************************************/
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
        if ($var=== "Nuevo_Tipo_Personal") {
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
    /*Optimizar controller*/
    public function HelpController($tipo){
        $controller = $tipo;
        require_once "../../Controller/administracion/" . $controller . "Controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        //$controller->index(); 
        return $controller; 
    }
   
}
