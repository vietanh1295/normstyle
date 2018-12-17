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
Route::get('/products/trang-suc-nam/{slugtype}', 'ShowController@showType');
Route::get('/products/trang-suc-nam-{slugmaterial}', 'ShowController@showMaterial');
Route::get('/products/trang-suc-nam/style/{slugstyle}', 'ShowController@showStyle');
Route::get('/products/trang-suc-nam-{slugmaterial}/{slugtype}', 'ShowController@showMT');
Route::get('/products/trang-suc-nam-{slugmaterial}/style/{slugstyle}', 'ShowController@showMS');
Route::get('/products/trang-suc-nam/{slugtype}/style/{slugstyle}', 'ShowController@showTS');
Route::get('/products/trang-suc-nam-{slugmaterial}/{slugtype}/style/{slugstyle}', 'ShowController@showMTS');
Route::get('/products/createtype', function(){
	return view('products.createtype');
});
Route::get('/products/creatematerial', function(){
	return view('products.creatematerial');
});
Route::get('/products/createstyle', function(){
	return view('products.createstyle');
});
Route::post('/products/storeType', 'ProductsController@addType');
Route::post('/products/storeStyle', 'ProductsController@addStyle');
Route::post('/products/storeMaterial', 'ProductsController@addMaterial');
Route::get('/index-copy', function () {
    return view('index-copy');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('products','ProductsController');
