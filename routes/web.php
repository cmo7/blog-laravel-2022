<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

Route::get('/', [FrontPageController::class, "get_front_page"]);

Route::get('/post', [PostController::class, "get_all_posts"]);
Route::get('/post/{slug}', [PostController::class, "get_post"]);
Route::get('/new-post', [PostController::class, "new_post_form"])->middleware('auth');
Route::post('/new-post', [PostController::class, "create_post"])->middleware('auth')->name('create_post');
Route::post('/delete', [PostController::class, "delete"])->middleware('auth');


Route::get('/category', [CategoryController::class, "get_all_categories"]);
Route::get('/category/{slug}', [CategoryController::class, "get_category"]);
Route::get('/new-category', [CategoryController::class, "new_category_form"])->middleware('auth');
Route::post('/new-category', [CategoryController::class, "create_category"])->middleware('auth');

Route::get('/signup', [AuthController::class, "signup_form"])->middleware('guest');
Route::post('/signup', [AuthController::class, "signup"])->middleware('guest');
Route::get('/login', [AuthController::class, "login_form"])->middleware('guest');
Route::post('/login', [AuthController::class, "login"])->middleware('guest');
Route::post('/logout', [AuthController::class, "logout"])->middleware('auth');
Route::get('/logout', function() {return redirect('/');})->middleware('auth');
