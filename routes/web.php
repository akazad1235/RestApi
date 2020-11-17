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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('/', 'ExampleController@dbTest');
$router->get('/user', 'RegistrationController@getUser');
$router->post('/userByEmail', 'RegistrationController@userSelectbyEmail');
$router->post('/user', 'RegistrationController@Registration');
$router->post('/userUpdate', 'RegistrationController@userUpdateProfile');
$router->post('/login', 'LoginController@onLogin');

$router->post('/tostToken', ['middleware'=>'auth', 'uses'=>'LoginController@tokenTest']);

//manage Police Station
$router->get('/poiceStation', 'PolicStationController@index');
$router->post('/poiceStation', 'PolicStationController@store');

//manage complain
$router->get('/complain', 'ComplainController@index');
$router->post('/complain', 'ComplainController@store');



