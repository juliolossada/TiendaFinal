<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/ /*inyecciones de dependencias*/
Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});

Route::bind('category', function($category){
    return App\Category::find($category);
});

Route::bind('user', function($user){
    return App\User::find($user);
});

////////////////


Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'middleware' => 'auth:user',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);

Route::get('auth/login', [
	'as' => 'login-get',
	'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

//Registroooo de usuario!!
Route::get('auth/register', [
	'as' => 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
	'as' => 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
]);

Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));

Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));


Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function()
{
	Route::get('home', ['as' => 'settings', function () {	

		return view('admin.home');
	}]);

	Route::resource('category', 'CategoryController');

	Route::resource('product', 'ProductController');

	Route::resource('user', 'UserController');

	Route::get('orders', [
		'as' => 'admin.order.index',
		'uses' => 'OrderController@index'
	]);
	Route::post('order/get-items', [
	    'as' => 'admin.order.getItems',
	    'uses' => 'OrderController@getItems'
	]);
	Route::get('order/{id}', [
	    'as' => 'admin.order.destroy',
	    'uses' => 'OrderController@destroy'
	]);
});