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
*/

Route::get('welcome', 'WelcomeController@index');
//改掉，不用欢迎页面
Route::get('home', 'HomeController@index');
Route::get('/', 'IndexController@index');
Route::get('user', 'UserController@index');
Route::get('user/id', 'UserController@id'); 

Route::get('/index', 'Index\IndexController@index');

//Route::get('/index/aa/:a', 'Index\IndexController@aa');

Route::get('/index/aaa/id/{id}', 'Index\IndexController@aaa');


Route::get('/index/bbb', 'Index\IndexController@bbb');
Route::get('/m', 'M\IndexController@index');
/* Route::get('/index/aa/{idq}/{ooo?}', function ($idq,$ooo = NULL) {
	return 'User '.$idq.$ooo;
});
	 */

/* Route::get('/index/aa/{idq}/{ooo}', function ($idq,$ooo) {
	return 'User '.$idq.$ooo;
}); */

//Route::domain('{account}.uubd.net')->group(function () {
	//Route::get('/', function ($account) {
		//
		//return 'User '.$account;
	//});
//});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
