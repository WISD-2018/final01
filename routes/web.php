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

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::get('/users', 'UsersController@index')->name('users');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/index', 'ProductController@index');
Route::post('/products/index', 'ProductController@store');
Route::delete('products/{product}','ProductController@destroy');

Route::get('/orders/index','OrderController@index');

Route::get('/orders/admin', 'OrderController@admin');
Route::delete('orders/{id}','OrderController@destroy');

Route::get('/cart', 'CartController@index')->name('cart.index');
//購物車新增
Route::get('/cart/{id}', 'CartController@add', function ($id) {
})->name('cart.add');
//購物車更新
Route::get('cart/{id}/{q}', 'CartController@update',function($id,$q){
})->name('cart.update');
//購物車刪除
Route::delete('cart/delete/{id}','CartController@delete',function($id){
})->name('cart.delete');


Route::get('checkout','CheckoutController@cartdetail');
Route::post('/orders',['as'=> 'orders.store','uses'=>'CheckoutController@store',function(Request $request){
}]);

Route::get('/home', 'HomeController@index')->name('home');
