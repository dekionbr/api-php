<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return phpinfo();
});

$router->group(['prefix' => '/v1'], function () use ($router) {

    $router->post('/login', function () use ($router) {
        return ['user' => ['name' => 'joão',
            'address' => ['street' => 'Rua A',
                'number' => 1001]
        ],
            'params' => ['sales_margin' => 55.5, 'date' => '2019-11-01']
        ];
    });
});


