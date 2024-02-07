<?php

function controller($matchedUri, $data){
    [$controller,$method] = explode('@',array_values($matchedUri)[0]);
    $controllerWithNamespace = CONTROLLER_PATH.$controller;
    if(!class_exists($controllerWithNamespace)){
      
        throw new Exception("Controller {$controller} não existe");
        
    } 
    
    $controllerInstance = new $controllerWithNamespace;

    if(!method_exists($controllerInstance,$method)){

        throw new Exception("O método {$method} não existe no controller {$controller}");

    }

    $controller = $controllerInstance->$method($data);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        die();
    }

    return $controller;
}