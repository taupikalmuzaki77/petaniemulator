<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function show(Post $post) {
        $post->load('genre', 'category');
        $posts = Post::latest()->get();
        return view('singlepost', compact('post', 'posts'));
    }
}
