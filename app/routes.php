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

// Dostep ogolny

Route::get('/', function()
{
	if(Auth::check())
	{
		return Redirect::to('/panel');
	}
	else
	{
		return Redirect::to('/login');
	}
});

Route::get('/kontakt', function()
{
	return View::make('kontakt');
});

// Obsluga logowania i wylogowania usera

Route::get('/login', function()
{
	return View::make('main');
});

Route::get('/logout', function()
{
	Auth::logout();

	return Redirect::to('/');
});

Route::post('/login', function()
{
	if (Auth::attempt(array('nip' => Input::get('nip'), 'password' => Input::get('password'))))
	{
		return Redirect::to('/panel');
	}
	else
	{
		return Redirect::to('/login')
				->with('message', "Błędny NIP i/lub hasło.")
				->withInput();
	}
});

// Dostep do panelu - tylko dla zalogowanych

Route::group(array('before' => 'auth'), function()
{
	Route::get('/panel', function()
	{
		$user = User::find(1);

		return View::make('panel')
				->with('user', $user);
	});

	Route::get('/panel/inprog', function()
	{
		return View::make('inprog');
	});
	Route::get('/panel/complete/', function()
	{
		return View::make('complete');
	});

	Route::get('/panel/det/{id}', function($id)
	{
		$ran = array("zakonczona","w toku");
		$status = $ran[array_rand($ran, 1)];

		return View::make('details')
				->with('id', $id)
				->with('status', $status);
	});
});

// admin

Route::get('/admin', function()
{
	if(Auth::check() and Auth::user()->admin)
	{
		return View::make('admin.admin');
	}
	else
	{
		return Redirect::to('/');
	}
});

Route::get('/admin/add', function()
{
	return View::make('admin.add');
});

// Route::post('/admin/add', 'AdminController@addUser');	// dodanie użytkownika

Route::post('/admin/add', function()
{

});



// wyjatki

App::missing(function($exception)
{
	return View::make('not-found');
});