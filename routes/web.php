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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('page.home');
});
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/news', function () {
    return view('page.bbnews');
});
Route::get('/crypto', function () {
    return view('page.crypto');
});
Route::get('/contact', function () {
    return view('page.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
