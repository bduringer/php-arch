<?php

function exactMatchUri($uri, $routes){
    return array_key_exists($uri,$routes) ? [$uri=>$routes[$uri]] : [];
}

function regexMatchedURI($uri, $routes){

    $matchedUri = array_filter(
        $routes,
        function($value) use ($uri){

            $regex = str_replace('/','\/',ltrim($value,'/'));
            return preg_match("/^$regex$/",ltrim($uri,'/'));

        },
        ARRAY_FILTER_USE_KEY
    );
    return $matchedUri;
}
function params($uri, $matchedUri){

    if(!empty($matchedUri)){

        $matchedToGetParams = array_keys($matchedUri)[0];

        return array_diff(
            $uri,
            explode('/',ltrim($matchedToGetParams,'/'))
        );
    }
    
    return [];

}

function formatParams($uri, $params){

    $paramsData = [];

    foreach ($params as $index => $param) {

        $paramsData[$uri[$index - 1]] = $param;

    }

    return $paramsData;

}
function router(){

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routes = require('routes.php');
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    $matchedUri =  exactMatchUri($uri,$routes[$requestMethod]);
    $data = [];

    if(empty($matchedUri)){
        
        $matchedUri =  regexMatchedURI($uri, $routes[$requestMethod]);

        $uri = explode('/',ltrim($uri,'/'));       
        
        $params = params($uri, $matchedUri);

        $data = formatParams($uri,$params);
        
    }

    if(!empty($matchedUri)){
        return controller($matchedUri, $data);
    }

    throw new Exception("Algo deu errado");
    
}