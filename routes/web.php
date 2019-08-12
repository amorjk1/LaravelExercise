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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','PagesController@index')->name('pages.index');

//returns the pagescontroller@index that points to pages.index

Route::get('/about','PagesController@about')->name('pages.about');

//it revisits /about and looks of the pagescontroller but looks for a different function.

Route::resource('/todos','TodosController');