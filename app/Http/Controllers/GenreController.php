<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        $genres = Genre::latest()->get();
        return view('genre', compact('genres'));
    }

    public function show($slug) {
        $genre = Genre::where('slug', $slug)->firstOrFail();
        $posts = $genre->posts()->latest()->paginate(18);
        return view('postbygenre', compact('genre', 'posts'));
    }
}
