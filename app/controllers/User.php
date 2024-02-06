<?php   
namespace app\controllers;

class User {
    public function show($params){

        if(!isset($params['user'])){
            return redirect('/');
        }
        $user = findBy('users','id',$params['user'],'email,password');
        var_dump($user);
        die();
    }
}