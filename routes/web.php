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

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog-index');
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog-create');
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog-store');
