<?php

$this->app['router']->group([

    'prefix' => KASH_URI

], function($router){

    $router->get('dashboard', [
        'as' => 'dashboard',
        'uses' => 'DashboardController@showDashboard'
    ]);

});
