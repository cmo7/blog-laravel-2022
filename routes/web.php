<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;

Route::get('/', function (Request $request) {
    $search_string = $request->query('search');
    $posts = Post::query()
        ->where('title', 'like', '%' . $search_string . '%')
        ->orWhere('content', 'like', '%' . $search_string . '%')
        ->get()
        ->take(9)
        ->sortByDesc('created_at');

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
    return view('category', [
        "category" => $category,
    ]);
});


Route::get('/new-post', function() {
    return view('new-post', [
        "categories" => Category::all()->sortBy('name'),
    ]);
});

Route::post('/new-post', function(Request $request) {
    $post = new Post();
    $post->title = $request->input('title');
    $post->slug = Str::slug($post->title);
    $post->excerpt = $request->input('excerpt');
    $post->content = $request->input('content');
    $post->category_id = $request->input('category_id');
    $post->save();
    return redirect('/');
});

Route::get('/new-category', function() {
    return view('new-category');
});

Route::post('/new-category', function(Request $request) {
    $category = new Category();
    $category->name = $request->input('name');
    $category->slug = Str::slug($category->name);
    $category->save();
    return redirect('/');
});
