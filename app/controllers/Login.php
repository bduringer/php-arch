<?php   
namespace app\controllers;

class Login {
    public function index(){
        return [
            'view' => 'login.php',
            'title' => 'Login',
            'data' => ['title' => 'Login']
        ];
    }

    public function store(){
        var_dump('login');
        die();
    }
}