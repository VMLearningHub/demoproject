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


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/view-album/{id}', [App\Http\Controllers\IndexController::class, 'view_album'])->name('view-album');
Route::post('/comment', [App\Http\Controllers\CommentController::class, 'comment'])->name('comment');

Route::get('/songe_info/{id}', [App\Http\Controllers\IndexController::class, 'songe_info'])->name('songe_info');