<?php

use App\Http\Controllers\Articles\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::prefix('articles')->middleware('throttle:api')->group(function () {
    Route::post('/', [ArticlesController::class, 'store'])->name('api.articles.store');
    Route::put('{article}', [ArticlesController::class, 'update'])->name('api.articles.update');
    Route::delete('{article}', [ArticlesController::class, 'delete'])->name('api.articles.delete');
});
