<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LatestPostController extends Controller
{
    public function index() {
        $posts = Post::latest()->paginate(18);
        return view('latestpost', compact('posts'));
    }
}
