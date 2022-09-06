<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

Route::get('/', function (Request $request) {
    $search_string = $request->query('search');
    $posts = Post::query()
        ->where('title', 'like', '%' . $search_string . '%')
        ->orWhere('content', 'like', '%' . $search_string . '%')
        ->get()
        ->take(9)
        ->sortBy('title');

    return view('front-page', [
        "posts" => $posts,
    ]);
});

Route::get('/post/{comodin}', function($comodin) {
    $p = Post::where('slug', $comodin)->firstOrFail();
    return view('post', [
        "post" => $p,
    ]);
});

Route::get('/category/{comodin}', function($comodin) {
    $category = Category::where('slug', $comodin)->firstOrFail();
    return $category;
});
