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


//


Route::get('/', function () {
  // return to dashboard if the user is admin
  if (Auth::check() &&
  (Auth::user()->type == "A" || Auth::user()->type == "S")){
    return view('admin_panel');
  }
  else{
    // intro view otherwise
    return view('intro');
  }
});

Route::get('/welcome', function () {
  return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
  Route::get('/admin', function()
  {
    return view('admin_panel');
  });

  // Restful routes

  Route::resource('examterms', 'ModelControllers\ExamTermController');
  Route::resource('students', 'ModelControllers\StudentController');

});
