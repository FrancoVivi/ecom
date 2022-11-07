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
/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', "Shop\MainController@index");
Route::get('/produit/{id}', "Shop\MainController@produit")->name('voir_produit');
Route::get('/categorie', 'Shop\MainController@viewByCategory');