<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\CategoryController;

Route::get('/', [FrontPageController::class, "get_front_page"]);

Route::get('/post', [PostController::class, "get_all_posts"]);
Route::get('/post/{slug}', [PostController::class, "get_post"]);
Route::get('/new-post', [PostController::class, "new_post_form"]);
Route::post('/new-post', [PostController::class, "create_post"]);

Route::get('/category', [CategoryController::class, "get_all_categories"]);
Route::get('/category/{slug}', [CategoryController::class, "get_category"]);
Route::get('/new-category', [CategoryController::class, "new_category_form"]);
Route::post('/new-category', [CategoryController::class, "create_category"]);
