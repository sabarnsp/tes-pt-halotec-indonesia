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

// router default 

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// generate new key

$router->get('/key', function () {
    return \Illuminate\Support\Str::random(32);
});


// route ui

// pasien

$router->get('/', 'PasienController@index');
$router->get('/pasien', 'PasienController@index');
$router->get('/pasien/{id}', 'PasienController@detail');
$router->get('/pasiensearch', 'PasienController@search');
$router->post('/pasiensearch', 'PasienController@showsearch');
$router->get('/pasienreport', 'PasienController@report');
$router->post('/pasienreport', 'PasienController@showreport');
$router->get('/pasienstore', 'PasienController@store');
$router->post('/pasien', 'PasienController@create');
$router->get('/pasienupdate/{id}', 'PasienController@show');
$router->post('/pasien/{id}', 'PasienController@update');
$router->get('/pasiendelete/{id}', 'PasienController@destroy');

// route restfull api

$router->get('/pasienApi', 'PasienController@indexApi');
$router->get('/pasienApi/{id}', 'PasienController@showApi');
$router->post('/pasiensearchApi', 'PasienController@searchApi');
$router->post('/pasienApi', 'PasienController@createApi');
$router->put('/pasienApi/{id}', 'PasienController@updateApi');
$router->delete('/pasienApi/{id}', 'PasienController@destroyApi');