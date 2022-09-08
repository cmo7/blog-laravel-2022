<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontPageController extends Controller
{
    public function get_front_page(Request $request) {
        $search_string = $request->query('search');
        $posts = Post::query()
            ->where('title', 'like', '%' . $search_string . '%')
            ->orWhere('content', 'like', '%' . $search_string . '%')
            ->get()
            ->sortByDesc('created_at')
            ->take(9);

        return view('front-page', [
            "posts" => $posts,
        ]);
    }
}
