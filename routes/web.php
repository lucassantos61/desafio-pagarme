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
Route::get('produto/shoppingCart',[
    'uses' =>'ProdutoController@getCart',
    'as' => 'produto.shoppingCart'
]);

Route::get('/checkout',[
    'uses' => 'ProdutoController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout',[
    'uses' => 'ProdutoController@postCheckout',
    'as' => 'checkout'
]);
Route::group(['prefix' => 'user'],function(){
    Route::group(['middleware' => 'guest'],function(){
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);
        
        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);
        
        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);
        
        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);
        
        Route::get('/logout',[
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
       
    });
     
});
