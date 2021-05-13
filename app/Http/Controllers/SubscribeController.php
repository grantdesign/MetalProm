<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
    	$messages = [
            'email' => 'Неверный формат email.',
            'unique' => 'Email уже существует.',
        ];

        $request->validate([
            'email' => 'required|email|unique:users',
        ], $messages);

        Subscribe::create($request->all());
        return redirect()->route('home')->with('status', 'Вы подписались на рассылку.');
    }
}
