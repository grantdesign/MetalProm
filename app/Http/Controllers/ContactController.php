<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contacts', [
    		'title' => 'Контакты',
    	]);
    }

    public function store(Request $request)
    {
    	$messages = [
    	    'email' => 'Неверный формат email.',
    	];

    	$request->validate([
    	    'email' => 'required|email',
    	], $messages);

    	Message::create($request->all());
    	return redirect()->route('home')->with('status', 'Сообщение успешно отправлено.');
    }
}
