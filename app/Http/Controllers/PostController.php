<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function get_post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', [
            "post" => $post,
        ]);
    }

    public function new_post_form()
    {
        return view('new-post', [
            "categories" => Category::all()->sortBy('name')
        ]);
    }
    public function create_post(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = Str::slug($post->title);
        $post->excerpt = $request->input('excerpt');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');
        $post->save();
        return redirect('/');
    }

    public function get_all_posts()
    {
        return redirect('/');
    }
}
