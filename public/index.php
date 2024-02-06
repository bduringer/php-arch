<?php
require('bootstrap.php');
try {
    $data = router();
    if(!isset($data['data'])){
        throw new Exception("O índice data esta faltando!");
    }
    if(!isset($data['view'])){
        throw new Exception("O índice view esta faltando!");
    }
    if(!file_exists(VIEWS.'/'.$data['view'])){
        throw new Exception("A view {$data['view']} não existe!");
    }
    
    extract($data['data']);
    
    $view = $data['view'];

    require VIEWS.'/master.php';

} catch (\Throwable $th) {
    var_dump($th->getMessage());
}