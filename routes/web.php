<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;

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

@Route::get('/', [MainController::class, 'home'])->name('home');

@Route::get('/articles', [MainController::class,'index'])->name('articles');
@Route::get('/articles/{article:slug}', [MainController::class, 'show'])->name('article');


Auth::routes();

Route::prefix('admin')->middleware('admin')->group(function(){

    Route::resource('articles', ArticleController::class)->except([
       'show'
    ]);

/*    Route::get('/articles', [ArticleController::class, 'index']);
    Route::get('/articles/create', [ArticleController::class, 'create']);
    Route::post('/articles/store', [ArticleController::class, 'store']);
    Route::delete('/articles/{article}/delete', [ArticleController::class, 'delete']);
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit']);
    Route::put('/articles/{article}/update', [ArticleController::class, 'update']);*/

});
