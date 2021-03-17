<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMS;
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

//CMS


Route::get('/articles/create', [ArticleController::class, 'create'])->middleware('auth')->name('create');

Route::post('/articles', [ArticleController::class, 'store'])->middleware('auth')->name('store');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article');

Route::get('/articles/edit/{id}', [ArticleController::class, 'edit'])->middleware('auth')->name('edit');

Route::post('/articles/update/{id}', [ArticleController::class, 'update'])->middleware('auth')->name('update');

Route::get('/articles/delete/{id}', [ArticleController::class, 'delete'])->middleware('auth')->name('delete');

Route::get('/', [ArticleController::class, 'blog_index'])->name('blog_index');

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
