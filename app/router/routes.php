<?php
return [

    'POST' => [
        '/login'=>'Login@store'
    ],
    'GET'=>[
        '/' => 'Home@index',
        '/login' => 'Login@index',
        '/user/create' => 'User@create',
        '/user/[0-9]+' => 'User@show',
        '/user/[0-9]+/name/[a-z]+' => 'User@show'
    ]
];  