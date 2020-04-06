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
Route::get('/admin/newschannels', 'BbcNewsModelController@index')->name('bnc.index')->middleware('auth');
Route::post('/admin/newschannels', 'BbcNewsModelController@store')->name('bnc.store')->middleware('auth');
Route::get('/admin/newschannels/create', 'BbcNewsModelController@create')->name('bnc.create')->middleware('auth');
Route::get('/admin/newschannels/{bbc_id}/delchk', 'BbcNewsModelController@delchk')->name('bnc.delchk')->middleware('auth');
Route::get('/admin/newschannels/{bbc_id}/edit', 'BbcNewsModelController@edit')->name('bnc.edit')->middleware('auth');
Route::put('/admin/newschannels/{bbc_id}/edit', 'BbcNewsModelController@update')->name('bnc.update')->middleware('auth');
Route::delete('/admin/newschannels/{bbc_id}/del', 'BbcNewsModelController@destroy')->name('bnc.destroy')->middleware('auth');
Route::get('/admin/newschannels/{bbc_id}/imgedit', 'BbcNewsModelController@imgEdit')->name('bnc.imgedit')->middleware('auth');
Route::put('/admin/newschannels/{bbc_id}/imgupdate', 'BbcNewsModelController@imgUpdate')->name('bnc.imgupdate')->middleware('auth');



Route::get('/admin/newsitems/{bbc_id}', 'BbiNewsItemsModelController@channItemList')->name('bni.itemlist')->middleware('auth');
Route::get('/admin/newsitems/{bbi_id}/edit', 'BbiNewsItemsModelController@edit')->name('bni.edit')->middleware('auth');
Route::post('/admin/newsitems/{bbi_id}/update', 'BbiNewsItemsModelController@update')->name('bni.update')->middleware('auth');
Route::get('/admin/newsitems/{bbi_id}/delchk', 'BbiNewsItemsModelController@delchk')->name('bni.delchk')->middleware('auth');
Route::delete('/admin/newsitems/{bbi_id}/delete', 'BbiNewsItemsModelController@destroy')->name('bni.destroy')->middleware('auth');