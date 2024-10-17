<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::resource('produtos',ProdutoController::class);
Route::resource('users', UserController::class);

Route::get('/', [SiteController::class,'index'])->name('site.index');

Route::get('/produto/{slug}',[SiteController::class, 'details'])->name('site.details');

Route::get('categoria/{id}',[SiteController::class, 'categoria'])->name('site.categoria');


Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth',[LoginController::class,'auth'])->name('login.auth');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');
Route::get('/register',[LoginController::class,'create'])->name('login.create');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('checkemail')->name('admin.dashboard');