<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ListGameController extends Controller
{
    public function index() {
        $posts = Post::orderBy('title')->get();
        $grouped = $posts->groupBy(function ($item) {
            return strtoupper(substr($item->title, 0, 1));
        });
        $grouped = $grouped->sortKeys();
        return view('listgame', compact('grouped'));
    }
}
