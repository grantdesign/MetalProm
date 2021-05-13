<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
    	if ($request->isMethod('post')) {
    		
    		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

    		    return redirect()->route('home')->with('status', 'Вы успешно авторизованы.');

    		} else return redirect()->back()->withErrors('Вы ввели неверный email и/или пароль.');

    	}

    	return view('companies.login', [
    		'title' => 'Авторизация',
    	]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
