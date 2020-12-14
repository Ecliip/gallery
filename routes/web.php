<?php

use App\Http\Controllers\PaintingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/artist', function () {return view('pages.artist');})->name('artist');
Route::get('/gallery', function () {return view('pages.gallery');})->name('gallery');
Route::get('/school', function () {return view('pages.school');})->name('school');
Route::resource('articles', ArticleController::class);
Route::get('/login', function () {return view('pages.login');})->name('login');
Route::post('/upload', [PaintingController::class, 'storeInPublic'])->name('upload');
Route::resource('paintings', PaintingController::class);
