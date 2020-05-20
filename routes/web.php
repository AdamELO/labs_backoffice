<?php

use App\Menu;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'HtmlController@home');
Route::get('/services', 'HtmlController@services');
Route::get('/blog', 'HtmlController@blog');
Route::get('/contact', 'HtmlController@contact');
Route::get('/blog-post', 'HtmlController@blogpost');

Auth::routes();

Route::get('/profil', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    $menus = Menu::first();
    return view('backoffice.admin',compact('menus'));
});

Route::resource('/menu','MenuController');