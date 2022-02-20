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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lang/{locale?}',  function($locale = null)
{
    \Xinax\LaravelGettext\Facades\LaravelGettext::setLocale($locale);
    setcookie("clocale", $locale, time() + (86400 * 30), "/");
    return redirect()->back();
})->name('changeLang');