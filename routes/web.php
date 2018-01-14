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

Route::get('/', [
    'uses' => 'ProdutoController@getIndex',
    'as' => 'produto.index'
]);

Route::get('/addCart/{id}',[
    'uses' =>'ProdutoController@getAddToCart',
    'as' => 'produto.addToCart'
]);
Route::get('/remove/{id}',[
    'uses' =>'ProdutoController@removeById',
    'as' => 'produto.removeById'
]);
Route::get('produto/shoppingCart',[
    'uses' =>'ProdutoController@getCart',
    'as' => 'produto.shoppingCart'
]);

Route::get('/checkout',[
    'uses' => 'ProdutoController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout',[
    'uses' => 'ProdutoController@finishVenda',
    'as' => 'checkout'
]);
