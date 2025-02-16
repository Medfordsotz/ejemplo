<?php

namespace Controllers;

use Model\Producto;
use MVC\Router;
class ProductoController{

    public function index(Router $router)
    {
        $router->render('productos/index');
    }

    public function guardarAPI(){
        getHeadersApi();
        $producto = new Producto($_POST);
        
        $resultado = $producto->guardar();

        if($resultado['resultado'] == 1){
            echo json_encode([
                "resultado" => 1
            ]);
            
        }else{
            echo json_encode([
                "resultado" => 0
            ]);

        }
    }


} 

