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

// Route::get('/', function () {
//     return view('dashboard');
// });

Auth::routes();



/* Front Login Routes */
Route::group(['middleware' => ['auth', 'role:user']], function()
{
    Route::get('/dashboard', 'UserController@index')->name('user dashboard');
});


/* Admin Routes */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'role:admin']], function()
{
	Route::get('/', 'AdminController@index')->name('admin dashboard');
 
});

Route::get('/404', 'PermissionDeniedController@index')->name('404');

Route::get('/', 'HomeController@index')->name('home');
/* Admin Routes */
// Route::group(['middleware' => ['auth', 'role:admin']], function()
// {
// 	Route::get('/', 'HomeController@dashboard')->name('dashboard');
 
// });


