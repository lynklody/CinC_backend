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
});*/
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
Route::post('/jobinterns/create', 'jobinternsController@store');
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

Route::get('/jobs', 'JobsController@index');
Route::post('/jobs/create', 'JobsController@store');
Route::get('/jobs/{id}', 'JobsController@show');
Route::delete('/jobs/{id}', 'JobsController@destroy');
Route::put('/jobs/{id}', 'JobsController@update');

Route::get('/projects', 'ProjectsController@index');
Route::post('/projects/create', 'ProjectsController@store');
Route::get('/projects/{id}', 'ProjectsController@show');
Route::delete('/projects/{id}', 'ProjectsController@destroy');
Route::put('/projects/{id}', 'ProjectsController@update');

Route::get('/travels', 'TravelsController@index');
Route::post('/travels/create', 'TravelsController@store');
Route::get('/travels/{id}', 'TravelsController@show');
Route::delete('/travels/{id}', 'TravelsController@destroy');
Route::put('/travels/{id}', 'TravelsController@update');

Route::get('/stuexperiences', 'StuexperiencesController@index');
Route::post('/stuexperiences/create', 'StuexperiencesController@store');
Route::get('/stuexperiences/{id}', 'StuexperiencesController@show');
Route::delete('/stuexperiences/{id}', 'StuexperiencesController@destroy');
Route::put('/stuexperiences/{id}', 'StuexperiencesController@update');

Route::get('/stuexperiences', 'StuexperiencesController@index');
Route::post('/stuexperiences/create', 'StuexperiencesController@store');
Route::get('/stuexperiences/{id}', 'StuexperiencesController@show');
Route::delete('/stuexperiences/{id}', 'StuexperiencesController@destroy');
Route::put('/stuexperiences/{id}', 'StuexperiencesController@update');

Route::get('/stuawards', 'StuawardsController@index');
Route::post('/stuawards/create', 'StuawardsController@store');
Route::get('/stuawards/{id}', 'StuawardsController@show');
Route::delete('/stuawards/{id}', 'StuawardsController@destroy');
Route::put('/stuawards/{id}', 'StuawardsController@update');

Route::get('/faclexperiences', 'FaclexperiencesController@index');
Route::post('/faclexperiences/create', 'FaclexperiencesController@store');
Route::get('/faclexperiences/{id}', 'FaclexperiencesController@show');
Route::delete('/faclexperiences/{id}', 'FaclexperiencesController@destroy');
Route::put('/faclexperiences/{id}', 'FaclexperiencesController@update');

Route::get('/faclscholars', 'FaclscholarsController@index');
Route::post('/faclscholars/create', 'FaclscholarsController@store');
Route::get('/faclscholars/{id}', 'FaclscholarsController@show');
Route::delete('/faclscholars/{id}', 'FaclscholarsController@destroy');
Route::put('/faclscholars/{id}', 'FaclscholarsController@update');

Route::get('/partnerships', 'PartnershipsController@index');
Route::post('/partnerships/create', 'PartnershipsController@store');
Route::get('/partnerships/{id}', 'PartnershipsController@show');
Route::delete('/partnerships/{id}', 'PartnershipsController@destroy');
Route::put('/partnerships/{id}', 'PartnershipsController@update');

Route::get('/', ['as' => 'home', 'uses' => 'IndexController@index']);

Route::get('/login', ['as' => 'login', 'uses' => 'IndexController@login']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'IndexController@logout'])->middleware('auth');
Route::get('/dump', ['as' => 'dump', 'uses' => 'IndexController@dump', 'middleware' => 'auth'])->middleware('auth');
Route::get('/auth0/callback', ['as' => 'logincallback', 'uses' => '\Auth0\Login\Auth0Controller@callback']);

/*Route::get('/login', function() {
    Auth::login();
    return redirect() ->away('http://cs.furman.edu/~eloftus/cinc/#/myCinc');
});*/

/*Route::get('/logout', function() {
    Auth::logout();
    return redirect() ->away('http://cs.furman.edu/~eloftus/cinc/#');
});*/


Route::get('/myCinc', 'DashboardController@getInfo');
Route::get('/status','StatusController@checkStatus');