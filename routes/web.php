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
Route::get('/courses', 'CoursesController@index');
Route::post('/courses/create', 'CoursesController@store');
Route::get('/courses/{id}', 'CoursesController@show');
Route::delete('/courses/{id}', 'CoursesController@destroy');
Route::put('/courses/{id}', 'CoursesController@update');

Route::get('/eventfeeds', 'EventfeedsController@index');
Route::post('/eventfeeds/create', 'EventfeedsController@store');
Route::get('/eventfeeds/{id}', 'EventfeedsController@show');
Route::delete('/eventfeeds/{id}', 'EventfeedsController@destroy');
Route::put('/eventfeeds/{id}', 'EventfeedsController@update');

Route::get('/stufellows', 'stufellowsController@index');
Route::post('/stufellows/create', 'stufellowsController@store');
Route::get('/stufellows/{id}', 'stufellowsController@show');
Route::delete('/stufellows/{id}', 'stufellowsController@destroy');
Route::put('/stufellows/{id}', 'stufellowsController@update');

Route::get('/tchfellows', 'tchfellowsController@index');
Route::post('/tchfellows/create', 'tchfellowsController@store');
Route::get('/tchfellows/{id}', 'tchfellowsController@show');
Route::delete('/tchfellows/{id}', 'tchfellowsController@destroy');
Route::put('/tchfellows/{id}', 'tchfellowsController@update');

Route::get('/jobinterns', 'jobinternsController@index');
Route::post('jobinterns/create', 'jobinternsController@store');
Route::get('/jobinterns/{id}', 'jobinternsController@show');
Route::delete('/jobinterns/{id}', 'jobinternsController@destroy');
Route::put('/jobinterns/{id}', 'jobinternsController@update');

Route::get('/travelprojects', 'travelprojectsController@index');
Route::post('/travelprojects/create', 'travelprojectsController@store');
Route::get('/travelprojects/{id}', 'travelprojectsController@show');
Route::delete('/travelprojects/{id}', 'travelprojectsController@destroy');
Route::put('/travelprojects/{id}', 'travelprojectsController@update');

Route::get('/nonotlogins', 'nonotloginsController@index');
Route::post('/nonotlogins/create', 'nonotloginsController@store');
Route::get('/nonotlogins/{id}', 'nonotloginsController@show');
Route::delete('/nonotlogins/{id}', 'nonotloginsController@destroy');
Route::put('/nonotlogins/{id}', 'nonotloginsController@update');

Route::get('/otlogins', 'otloginsController@index');
Route::post('/otlogins/create', 'otloginsController@store');
Route::get('/otlogins/{id}', 'otloginsController@show');
Route::delete('/otlogins/{id}', 'otloginsController@destroy');
Route::put('/otlogins/{id}', 'otloginsController@update');

Route::get('/blogs', 'BlogsController@index');
Route::post('/blogs/create', 'BlogsController@store');
Route::get('/blogs/{id}', 'BlogsController@show');
Route::delete('/blogs/{id}', 'BlogsController@destroy');
Route::put('/blogs/{id}', 'BlogsController@update');
//Route::get('/blogs/{id}',['uses'=>'BlogsController@index', 'as'=>'blogs.index']);

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback');
Route::get('/logout', function() {
    Auth::logout();
    return Redirect::home();
});