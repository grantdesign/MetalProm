<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
    	$categories = Menu::where('parent_id', 3)->with('posts')->get();
    	$posts = Post::orderBy('id', 'desc')->limit(8)->get();

    	return view('home', [
    		'title' => 'Metal Prom - торгово-промышленный портал',
    		'categories' => $categories,
    		'posts' => $posts,
    	]);
    }
}