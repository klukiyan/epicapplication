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
// original route commented
// Route::get('/', function () {
//     return view('welcome');
// });


//kl added here the route to page
// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('users/{id}', function ($id) {
//     return '<p>This is user #'.$id.'</p>';
// });
//# here is the new step 3

Route::get("/", function(){
    return View('tfthemes.materialize-parallax.home'); 
  });
  Route::get("/master", function(){
    return View('tfthemes.materialize-parallax.master'); 
  });
// Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');


//this is my extra page for testing and research
Route::get('/research', function () {
    return view('pages.research');
});
Route::get('/research2', function () {
    return view('pages.research2');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
