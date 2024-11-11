<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/galery', [GalleryController::class, 'show'])->name('gallery.show');

Route::get('/article/{article}', [ArticleController::class, 'view'])->name('article.view');

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/galleries', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/dashboard/galleries/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/galleries', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/galleries/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/galleries/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    Route::get('/dashboard/galery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/dashboard',[UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/dashboard/article', [ArticleController::class, 'show'])->name('article.show');
    Route::get('/dashboard/articles/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/dashboard/articles/create', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/dashboard/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/dashboard/article/{article}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/dash-article/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');



});


require __DIR__.'/auth.php';