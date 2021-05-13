<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('title', 'like', "%{$request->s}%")->with('user')->paginate(5)->appends(request()->only('s'));

        return view('posts.search', [
            'title' => 'Поиск',
            'posts' => $posts,
        ]);
    }
}
