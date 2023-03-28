<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingAdminController; 
use App\Http\Controllers\TestingUserController; 
use App\Http\Controllers\PostController; 

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
    return view('layouts.global');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Test Admin
Route::resource('test_admin', TestingAdminController::class)->middleware('admin');

// Route Test Usar
Route::resource('test_user', TestingUserController::class);

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);


Route::get('/periode', [\App\Http\Controllers\TestingAdminController::class, 'periode']);
Route::get('/area', [\App\Http\Controllers\TestingAdminController::class, 'area']);
Route::get('/web', [\App\Http\Controllers\TestingAdminController::class, 'web']);