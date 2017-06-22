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

Route::get('/', 'PagesController@getIndex')->name('index');

Route::get('/portfolio', 'PagesController@getPortfolio')->name('portfolio');

Route::get('/about', 'PagesController@getAbout')->name('about');

Route::get('/contact', 'PagesController@getContact')->name('contact');

Route::post('/contact', 'PagesController@postContact');

Route::get('/sitemap.xml', function() {
   return File::get(public_path() . '\sitemap.xml');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/scratch', 'HomeController@scratch')->name('scratch');
Route::get('/logout', 'HomeController@logout')->name('logout');


