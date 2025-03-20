<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\MemeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\HelmetController;
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

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::resource('/memes', MemeController::class);

Route::get('/', [\App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/about', [\App\Http\Controllers\PagesController::class, 'about'])->name('about');

Route::get('/search', [PostsController::class, 'search'])->name('search');
Route::post('/like', [LikeController::class, 'store'])->name('like.store');
Route::resource('/helmets', HelmetController::class);
Route::post('/helmets/{id}/vote', [HelmetController::class, 'vote'])->name('helmets.vote');