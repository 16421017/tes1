<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});


Route::get('/blog', 'Artikel@index')->name('blog');
Route::get('/beach', 'Artikel@beach')->name('beach');
Route::get('/adm', 'Admincontroller@admin')->name('adm');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
