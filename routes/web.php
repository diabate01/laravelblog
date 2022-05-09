<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;



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

Route::get('/', [PagesController::class, 'index']);
Route::resource('/blog', 'App\Http\Controllers\PostController')->name('index' , 'about');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');