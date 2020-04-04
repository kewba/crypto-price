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

Route::get('/admin', 'AdminController@index')->name('home');
Route::get('/admin/newschannels', 'BbcNewsModelController@index')->name('bnc.index');
Route::post('/admin/newschannels', 'BbcNewsModelController@store')->name('bnc.store');
Route::get('/admin/newschannels/create', 'BbcNewsModelController@create')->name('bnc.create');
Route::get('/admin/newschannels/{bbc_id}/delchk', 'BbcNewsModelController@delchk')->name('bnc.delchk');
Route::get('/admin/newschannels/{bbc_id}/edit', 'BbcNewsModelController@edit')->name('bnc.edit');
Route::put('/admin/newschannels/{bbc_id}/edit', 'BbcNewsModelController@update')->name('bnc.update');
Route::delete('/admin/newschannels/{bbc_id}/del', 'BbcNewsModelController@destroy')->name('bnc.destroy');
Route::get('/admin/newschannels/{bbc_id}/imgedit', 'BbcNewsModelController@imgEdit')->name('bnc.imgedit');
Route::put('/admin/newschannels/{bbc_id}/imgupdate', 'BbcNewsModelController@imgUpdate')->name('bnc.imgupdate');
