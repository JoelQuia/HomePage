<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Users = User::orderByDesc('id')->get();

        return view('users.index', ['users' => $Users]);
    }

    public function show(User $user)
    {

        return view('users.show', ['user' => $user]);
    }



    public function create()
    {

        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $request->validated();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, User $user)
    {
        $request->validated();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.show', ['user' => $user->id])->with('success', 'Usuário atualizado com sucesso!');
    }
}
