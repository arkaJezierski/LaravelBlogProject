<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Post;

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
Route::get('/dashboard',function (){
    $posts = Post::get();
    //dd($posts);
    return view('/dashboard', compact('posts'));
} )//)
    ->name('dashboard');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');
