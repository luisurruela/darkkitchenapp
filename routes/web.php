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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
  
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'config'])->name('home-config');
    Route::get('admin/settings', [App\Http\Controllers\HomeController::class, 'profile'])->name('admin.profile');
    Route::get('admin/passwords', [App\Http\Controllers\HomeController::class, 'passwords'])->name('admin.passwords');

});