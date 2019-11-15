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
    return view('welcome');
})->name('welcome');

Route::get('/model/factory', function(){
    return view('modelFactory');
})->name('factory');

Route::get('/basic', 'BasicController@index')->name('basic');
Route::post('/topics', 'BasicController@save');

/* Restfull controller; 3/7
*Route::get('/users', 'UserController@index');
*Route::get('/users/create', 'UserController@create');
*Route::post('users', 'UserController@store');
* Restfull controller; 4/7
*Route::get('users/{user}', 'UserController@show'); // Here we will be using ROUTE MODEL BINDGING
* Restfull controller; 5/7
*Route::get('users/{user}/edit', 'UserController@edit');  // and here
* Restfull controller; 6/7
*Route::patch('users/{user}', 'UserController@update');  // and here
* Restfull controller; 6/7
*Route::delete('users/{user}', 'UserController@destroy');  // ROUTE MODEL BINDING over again
*/
// All of the 7 Route above can be summarized in just 1 line of code.
Route::resource('users', 'UserController');

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');