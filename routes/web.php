<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
//Aqui temos os um retorno original do Laravel
Route::get('/', function () {
    return view('welcome');
*/


//Aqui temos uma rota para as view index e welcome
//Route::get('/', function () {
    //return view('index');
    //return view('welcome');

/*
Route::get('/', function () {
    //Aqui abaixo para se fazer um teste de aparição no navegador, elimina-se o "view('welcome')".
    return 'Iremar Pereira da Silva';
*/

//Aqui com o "@" entre "BookController e index", indica que o @ faz executar o método index
Route::get('/', 'BookController@index');

//});
