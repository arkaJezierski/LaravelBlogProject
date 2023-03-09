<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Auth\;

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

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact','contact');
Route::view('/single', 'single');
Route::view('/work', 'work');
Route::get('/dashboard', [\App\Http\Controllers\PostController::class, 'index'])
    ->name('dashboard');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
