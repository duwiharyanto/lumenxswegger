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
$router->get("/",function(){
    return "Lumen X Swagger";
});
$router->group(['prefix' => 'public/api/v1'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
    $router->get('/user','UserController@index');
    $router->get('/user-cari', 'UserController@search');
    $router->get('/user/{id}', 'UserController@show');
    $router->post('/user', 'UserController@store');
    $router->put('/user/{id}', 'UserController@update');
    $router->delete('/user/{id}', 'UserController@delete');

    $router->get('/unit', 'UnitContrxoller@index');

    $router->post('/unit', 'UnitController@store');



});
