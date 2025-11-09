<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'showHomePage']);
Route::get('/multimedia', [PostController::class, 'showMultimediaPage']);
Route::get('/software-engineering', [PostController::class, 'showSoftwareEngineeringPage']);
Route::get('/detail/{id}', [PostController::class, 'showPostDetail']);
Route::get('/writers', [PostController::class, 'showWritersPage']);
Route::get('/author/{authorName}', [PostController::class, 'showPostByAuthor']);