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

Route::get('/', 'IndexController@loadHome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'MessageController@loadBlog')->name('blog');

Route::get('/post/{id?}', 'MessageController@loadPost')->name('post');



Route::get('/editor', function (){

    return view('editor');
})->name('editor');

Route::post('/postnewmessage', 'MessageController@postNewMessage')->name('postnewmessage');


Route::prefix('admin')->group(function (){

    Route::get('/login', 'Auth\AdminLoginController@showLogin')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
