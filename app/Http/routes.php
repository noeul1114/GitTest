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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/sayit', 'IntroductionController@index');

Route::get('/todayComment', 'TodayCommentController@index')->name('todayComment');
Route::get('/postComment', 'TodayCommentController@viewCommentPost');
Route::post('postComment', 'TodayCommentController@postComment')->name('postComment');
Route::post('voteComment/{id}', 'TodayCommentController@voteComment')->name('voteComment');

//Route::get('/board/a', 'AboardController@index');

Route::get('/board/{sort_board}', 'PostController@index')->name('boardView');
Route::get('/board/{sort_board}/{id}', 'PostController@articleView')->name('articleView');

// board view/post/delete...
Route::get('/postBoard', [
  'as' => 'postBoard',
  'uses' => 'PostController@boardView'
]);
Route::post('postBoard', [
  'as' => 'postBoard',
  'uses' => 'PostController@postBoard'
]);
Route::post('/voteBoard/{sort_board}/{id}', [
  'as' => 'voteBoard',
  'uses' => 'PostController@voteBoard'
]);

// Authentication Routes...
Route::get('auth/login', [
  'as' => 'login',
  'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('auth/login', [
  'as' => 'login',
  'uses' => 'Auth\AuthController@postLogin'
]);
Route::get('auth/logout', [
  'as' => 'logout',
  'uses' => 'Auth\AuthController@getLogout'
]);

// Registration Routes...
Route::get('auth/register', [
  'as' => 'register',
  'uses' => 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', [
  'as' => 'register',
  'uses' => 'Auth\AuthController@postRegister'
]);
