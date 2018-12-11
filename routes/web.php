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
    return view('index');
});
Route::get('/product/trang-suc-nam/{slugtype}', 'ShowController@showType');
Route::get('/product/trang-suc-nam-{slugmaterial}', 'ShowController@showMaterial');
Route::get('/product/trang-suc-nam/style/{slugstyle}', 'ShowController@showStyle');
Route::get('/product/trang-suc-nam-{slugmaterial}/{slugtype}', 'ShowController@showMT');
Route::get('/product/trang-suc-nam-{slugmaterial}/style/{slugstyle}', 'ShowController@showMS');
Route::get('/product/trang-suc-nam/{slugtype}/style/{slugstyle}', 'ShowController@showTS');
Route::get('/product/createtype', function(){
	return view('product.createtype');
});
Route::get('/product/creatematerial', function(){
	return view('product.creatematerial');
});
Route::get('/product/createstyle', function(){
	return view('product.createstyle');
});
Route::post('/product/storeType', 'ProductsController@addType');
Route::post('/product/storeStyle', 'ProductsController@addStyle');
Route::post('/product/storeMaterial', 'ProductsController@addMaterial');
Route::get('/index-copy', function () {
    return view('index-copy');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('product','ProductsController');
