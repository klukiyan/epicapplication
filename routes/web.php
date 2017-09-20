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

//# here is the new step 2
Route::get('/', 'PagesController@index');

//kl added here the route to page
Route::get('/about', function () {
    return view('pages.about');
});

Route::get('users/{id}', function ($id) {
    return '<p>This is user #'.$id.'</p>';
});