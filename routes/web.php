<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register wjb routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/articles');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('article.list');
Route::get('/article/new', [ArticleController::class, 'create'])->name('article.new');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->name('article.delete');