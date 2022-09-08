<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function get_category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('category', [
            "category" => $category,
        ]);
    }

    public function new_category_form()
    {
        return view('new-category');
    }

    public function create_category(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = Str::slug($category->name);
        $category->save();
        return redirect('/');
    }

    public function get_all_categories()
    {
        $categories = Category::all();
        return view('all-categories', [
            "categories" => $categories,
        ]);
    }
}
