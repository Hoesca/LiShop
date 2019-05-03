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
    //用户收货地址路由
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    Route::get('user_addresses/{userAddress}', 'UserAddressesController@edit')->name('user_addresses.edit');
    Route::put('user_addresses/{userAddress}', 'UserAddressesController@update')->name('user_address.update');
    Route::delete('user_addresses/{userAddress}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
    //收藏商品路由
    Route::post('products/{product}/favor', 'ProductsController@favor')->name('products.favor');
    Route::delete('products/{product}/disfavor', 'ProductsController@disfavor')->name('products.disfavor');
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
    //购物车路由
    Route::get('cart', 'CartController@index')->name('cart.index');
    Route::post('cart', 'CartController@add')->name('cart.add');
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
    //订单路由
    Route::post('orders', 'OrdersController@store')->name('orders.store');
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
    Route::get('orders/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
    Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
    Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
});
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');

Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');

