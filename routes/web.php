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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', [
    'uses' => 'Page\HomepageController@index',
    'as' => 'home_path',
]);
Route::get('data/', [
    'uses' => 'Page\HomepageController@store',
    'as' => 'data_store_path',
]);
