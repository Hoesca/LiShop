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

Route::redirect('/', '/products')->name('root');
Auth::routes(['verify' => true]);
Auth::routes();

//用户地址路由组
Route::group(['middleware' => ['auth', 'verified']], function (){
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    Route::get('user_addresses/{userAddress}', 'UserAddressesController@edit')->name('user_addresses.edit');
    Route::put('user_addresses/{userAddress}', 'UserAddressesController@update')->name('user_address.update');
    Route::delete('user_addresses/{userAddress}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
});

Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');
