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
    return $router->app->version();
});
$router->group(["prefix" => "api"], function () use ($router) {
    //Identitas Siswa
    $router->get('showIDSiswa', ['uses' => 'IdentitasSiswaController@showIdentitasSiswa']);
    $router->post('createIDSiswa', ['uses' => 'IdentitasSiswaController@createIdentitasSiswa']);

    //Kelas
    $router->get('showKelas', ['uses' => 'KelasController@showKelas']);
    $router->post('createKelas', ['uses' => 'KelasController@createKelas']);

    //Siswa
    $router->get('showSiswa', ['uses' => 'SiswaController@showSiswa']);
    $router->post('createSiswa', ['uses' => 'SiswaController@createSiswa']);
});