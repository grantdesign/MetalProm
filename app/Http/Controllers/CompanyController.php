<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Region;
use App\User;
use Hash;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->with('region', 'menu')->paginate(5);

        return view('companies.index', [
            'title' => 'Каталог поставщиков',
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Menu::where('parent_id', '!=', 0)->with(['parent', 'children', 'users'])->get();
        $regions = Region::orderBy('name', 'asc')->get();

        return view('companies.create', [
            'title' => 'Регистрация компании',
            'categories' => $categories,
            'regions' => $regions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'email' => 'Неверный формат email.',
            'image' => 'Изображение не добавлено.',
            'unique' => 'Email уже существует.',
        ];

        $request->validate([
            'email' => 'required|email|unique:users',
            'image' => 'required|image',
        ], $messages);

        $input = $request->except('_token', 'image');

        if ($request->hasFile('image')) {
            
            $path = $request->file('image')->store('users');
            $input['image'] = $path;

        }

        $input['password'] = Hash::make($request->password);

        User::create($input);
        return redirect()->route('home')->with('status', 'Вы успешно зарегистрированы.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('companies.show', [
            'title' => $user->name,
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
