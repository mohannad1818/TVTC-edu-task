<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('prevention', function () {
    return view('prevention');
});


Route::get('single', function () {
    return view('single');
});


Route::get('symptoms', function () {
    return view('symptoms');
});


Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}', 'UserController@profile')->name('user.profile');

Route::get('/edit/user/', 'UserController@edit')->name('user.edit');

Route::post('/edit/user/', 'UserController@update')->name('user.update');
Route::resource('/posts', 'Post1Controller');
Route::post('/posts', 'Post1Controller@store')->name('post');
Route::resource('/categories', 'CategoriesController');





// Google Login
Route::get('login/google', 'App\Http\Controllers\Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'App\Http\Controllers\Auth\LoginController@handleGoogleCallback');


// facebook Login
Route::get('login/facebook', 'App\Http\Controllers\Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'App\Http\Controllers\Auth\LoginController@handleFacebookCallback');


// Twitter Login
Route::get('login/github', 'App\Http\Controllers\Auth\LoginController@redirectToGithub')->name('login.github');
Route::get('login/github/callback', 'App\Http\Controllers\Auth\LoginController@handleGithubCallback');




