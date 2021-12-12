<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/users/add', [App\Http\Controllers\UserController::class, 'create'])->name('users-add');
Route::post('/users/store', [App\Http\Controllers\UserController::class, 'store'])->name('users-store');
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users-edit');
Route::post('/users/update', [App\Http\Controllers\UserController::class, 'update'])->name('users-update');
Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('users-delete');
Route::get('/kategori', [App\Http\Controllers\Kategori::class, 'index'])->name('kategori');
Route::get('/kategori/add', [App\Http\Controllers\Kategori::class, 'create'])->name('kategori-add');
Route::post('/kategori/store', [App\Http\Controllers\Kategori::class, 'store'])->name('kategori-store');
Route::get('/kategori/edit/{id}', [App\Http\Controllers\Kategori::class, 'edit'])->name('kategori-edit');
Route::post('/kategori/update', [App\Http\Controllers\Kategori::class, 'update'])->name('kategori-update');
Route::get('/kategori/delete/{id}', [App\Http\Controllers\Kategori::class, 'delete'])->name('kategori-delete');


