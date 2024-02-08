<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;

// Маршруты для новостей
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);
Route::post('/news', [NewsController::class, 'store']);
Route::put('/news/{id}', [NewsController::class, 'update']);
Route::delete('/news/{id}', [NewsController::class, 'destroy']);
Route::put('/news/{id}/views', [NewsController::class, 'incrementViews']);

// Маршруты для комментариев
Route::delete('/comments/{id}', [CommentController::class, 'destroy']);
Route::post('/news/{id}/comments', [CommentController::class, 'store']);
