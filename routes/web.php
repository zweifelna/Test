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

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get('/', function() {
    return 'Je suis la page d\'accueil !';
  })->name('home');
*/
 
/*Route::get('contact', function() {
    return "C'est moi le contact.";
});

Route::get('vue/{n}', function($n) {
    return view('vue'.$n);
})->where('n', '[0-9]+');

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');



Route::get('/', 'WelcomeController@index')->name('home');

Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');


Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');