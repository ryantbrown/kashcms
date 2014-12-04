<?php

$this->app['router']->group([

    'prefix' => KASH_URI

], function($router){

    $router->get('', [
        'as' => 'admin',
        'uses' => 'AuthController@authIndex'
    ]);

    $router->get('login', [
        'as' => 'login',
        'uses' => 'AuthController@showLogin'
    ]);

    $router->post('login', [
        'as' => 'doLogin',
        'uses' => 'AuthController@doLogin'
    ]);
});