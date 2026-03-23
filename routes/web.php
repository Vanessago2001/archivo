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

Route::view('/', 'inicio')->name('inicio');
Route::view('/blog', 'blog')->name('blog');
Route::view('/crear', 'crear')->name('crear');
Route::view('/categoria', 'categoria')->name('categoria');
?>