<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class CategoryController extends Controller
{
    public function index($slug)
    {
    	$category = Menu::where('slug', $slug)->with('children')->firstOrFail();

    	$categories = $category->children;

    	return view('categories.index', [
    		'title' => $category->name,
    		'categories' => $categories,
    	]);
    }
}
