<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	if (Auth::check()) {
		return View::make('usuarios.welcome');
	} else {
		return View::make('usuarios.login');
	}
});

Route::get('login', 'UsuariosController@login');
Route::post('login', 'UsuariosController@validate');


Route::group(array('before' => 'auth|acl'), function()
{
	Route::get('logout', array('uses' => 'UsuariosController@logout', 'as' => 'usuario.logout'));
	Route::get('welcome', array('uses' => 'UsuariosController@welcome', 'as' => 'usuario.welcome'));
	Route::resource('veiculo', 'VeiculosController');
	Route::resource('usuario', 'UsuariosController', array('except' => array('show')));
	Route::resource('perfil', 'PerfisController', array('except' => array('show')));
});