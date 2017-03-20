<?php

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
use App\Produto;
use App\Compra;
use App\User;

Route::resource('/users','UserController');

Route::get('/', ['uses' => 'ProdutoController@index',
	'as' => 'produto.index'
]);

Route::get('/create', ['uses' => 'ProdutoController@create',
	'as' => 'produto.create'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/area', 'ProdutoController@area');

Route::get('/edit/{id}', [
	'uses' => 'ProdutoController@edit',
	'as' => 'users.edit']);

Route::get('/index', [
	'uses' => 'ProdutoController@index',
	'as' => 'users.index']);

Route::get('/show/{id}', [
	'uses' => 'ProdutoController@show',
	'as' => 'users.show']);


Route::get('/addCart/{id}', [
	'uses' => 'ProdutoController@addCart',
	'as' => 'produto.addCart']);

Route::get('/postCart', [
	'uses' => 'ProdutoController@postCart',
	'as' => 'produto.postCart']);


Route::get('/shoppingCart', [
	'uses' => 'ProdutoController@getCart',
	'as' => 'produto.shoppingCart']);


Route::get('/comprar/$id', [
	'uses' => 'CompraController@comprar',
	'as' => 'compras.comprar']);


Route::get('/create', [
	'uses' => 'ProdutoController@create',
	'as' => 'produto.create']);


Route::get('/show/{id}', [
	'uses' => 'ProdutoController@show',
	'as' => 'produto.show']);

Route::resource('/shop','ProdutoController');


Route::group(['middleware' => ['web']], function() {
  Route::resource('shop','ProdutoController');  
});

Route::group(['middleware' => ['web']], function() {
  Route::resource('comprar','CompraController');  
});