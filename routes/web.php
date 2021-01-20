<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PaintingController;
use Illuminate\Support\Facades\Artisan;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/artist', function () {return view('pages.artist');})->name('artist');
Route::get('/school', function () {return view('pages.school');})->name('school');
Route::resource('articles', ArticleController::class);
Route::post('/upload', [PaintingController::class, 'storeInPublic'])->name('upload');
Route::resource('paintings', PaintingController::class);
Route::get('/updateapp', function()
{
//    exec('composer dump-autoload');
//    echo 'composer dump-autoload complete';
//    Artisan::call('config:cache');
//    Artisan::call('route:cache');
//    Artisan::call('view:cache');
    return view('pages.school');
});
Route::get('/link', function()
{
    echo 'Link updated';
    Artisan::call('view:cache');
});

require __DIR__.'/auth.php';
