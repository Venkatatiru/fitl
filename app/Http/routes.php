<?php
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
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

Route::get('/', 'QuestionController@index');


Route::get('home', function () {
    return redirect('/');
});


Route::get('welcome', function () {
    return view('welcome');
});


Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

Route::delete('questions/{question}','QuestionController@destroy');
Route::get('questions/{queston}/edit','QuestionController@edit');
Route::put('questions/{question}','QuestionController@update');
Route::post('questions/store','QuestionController@store');
Route::get('questions/create', 'QuestionController@create');
Route::get('questions/search', 'QuestionController@search');
Route::get('questions/{question}','QuestionController@show');
Route::get('questions','QuestionController@index');

// comments route
Route::resource('questions.comments','QuestionCommentController'
					,['only' => ['store','update','destroy']]);

Route::resource('languages', 'LanguageController');

//User Routes


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');
