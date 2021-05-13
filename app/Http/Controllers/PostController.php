<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Post;

class PostController extends Controller
{
    public function index($category, $slug)
    {
    	$category = Menu::where('slug',  $slug)->with('parent', 'posts')->first();

        $posts = Post::where('menu_id', $category->id)->orderBy('id', 'desc')->with('menu', 'user')->paginate(5);

    	return view('posts.index', [
    		'title' => $category->name,
    		'category' => $category,
            'posts' => $posts,
    	]);
    }

    public function create(Menu $menu)
    {
    	return view('posts.create', [
    		'title' => 'Новое объявление',
    		'menu' => $menu,
    	]);
    }

    public function store(Request $request)
    {
        $messages = [
            'image' => 'Изображение не добавлено.',
        ];

        $request->validate([
            'image' => 'required|image',
        ], $messages);

    	$input = $request->except('_token', 'image');

    	if ($request->hasFile('image')) {
    		
    		$path = $request->file('image')->store('posts');
    		$input['image'] = $path;

    	}

    	Post::create($input);
    	return redirect()->route('home')->with('status', 'Объявление успешно добавлено.');
    }

    public function show(Post $post)
    {
    	return view('posts.show', [
    		'title' => $post->title,
    		'post' => $post,
    	]);
    }
}
