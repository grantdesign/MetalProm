<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
    	$news = News::orderBy('id', 'desc')->paginate(5);

    	return view('news.index', [
    		'title' => 'Новости',
    		'news' => $news,
    	]);
    }

    public function show(News $news)
    {
    	return view('news.show', [
    		'title' => $news->title,
    		'item' => $news,
    	]);
    }
}
