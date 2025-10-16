<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $query = $request->input('query');

        $results = Post::where('title', 'like', "%{$query}%" )->get();

        return view('searchresults', compact('results', 'query'));
    }
}
