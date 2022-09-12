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
        $request->validate([
            "title" => "required|max:255|unique:posts",
            "excerpt" => "required",
            "cover" => "required|image",
            "content" => "required",
            "style" => "required|numeric|gte:1|lte:6",
            "category_id" => "required|exists:categories,id",
        ]);

        $cover = $request->file('cover');
        $coverFileName = time() . $cover->getClientOriginalName();

        $cover->move('img', $coverFileName);

        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = Str::slug($post->title);
        $post->excerpt = $request->input('excerpt');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');
        $post->style = $request->input('style');
        $post->cover = $coverFileName;
        $post->user = auth()->user();
        $post->save();

        session()->flash('success', 'Se ha creado un nuevo post');

        return redirect('/');
    }

    public function get_all_posts()
    {
        return redirect('/');
    }

    public function delete(Request $request) {
        $id = $request->input('post_id');
        $post = Post::findOrFail($id);
        if ($post->user == auth()->user()) {
            $post->delete();
            return redirect('/')->with('success', 'Post borrado con éxito');
        }
        return redirect('/')->with('success', 'No tienes permiso');
    }
}
