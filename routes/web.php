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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:superadmin|admin']], function(){	

Route::resource('Account', 'AkunController');
Route::resource('Catalog', 'CatalogController');
Route::resource('Detail', 'DetaillController');
Route::resource('Merek', 'MerekkController');
Route::resource('Kontak', 'KontakController');
Route::resource('Berita', 'BeritaController');

});

Route::resource('contact', 'ContactController');


Route::get('/catalog', function () {
    return view('frontend.catalog.catalog');
});


Route::get('/about', function () {
    return view('frontend.about.about');
});


Route::get('/catalog/{id}', array('as' => 'showperkategori', 'uses' => 'FrontendController@showperkategori'));

Route::get('viewdetail/{id}', 'FrontendController@viewdetail');

Route::get('berita/{id}', 'FrontendController@berita');




