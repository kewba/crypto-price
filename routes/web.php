<?php
use App\bbiNewsItemsModel;

use Carbon\Carbon;
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
Route::get('/','PageController@index')->name('index');
Route::get('/about','PageController@about')->name('about');
Route::get('/news','PageController@news')->name('news');
Route::get('/news/{seo_url}/','PageController@newsSingle')->name('news_single');
Route::get('/crypto','PageController@crypto')->name('crypto');
//Route::get('/contact','PageController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
