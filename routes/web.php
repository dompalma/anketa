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
});

Route::post('/rezultats.blade.php', function () {
    return view('rezultats');
});

Route::post('/', function () {
        return view('rezultats');
});
Route::resource('anketa','AnketaController');

Route::resource('respondent', 'RespondentController');

Route::patch('/respondenti/{id}', 'RespondentController@update')->name('respondenti.update');

Route::post('/respondenti/respondenti.store', 'RespondentController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
