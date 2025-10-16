<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::latest()->get();
        return view('kategori', compact('categories'));
    }

    public function show($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->latest()->paginate(18);
        return view('postbycategory', compact('category', 'posts'));
    }
}
