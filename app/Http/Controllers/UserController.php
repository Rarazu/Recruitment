<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // compact('name') === ['name' => $name]
    public function index()
    {
        return view('user');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required|min:5',
            'password' => 'required|min:5',
            'password_confirm' => 'required|same:password'
        ]);

        // dd($validated);
        // dd($request->all());

        $user = new User();
        // $user->{kolom_database} = $request->input('input_name');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->password = $request->input('password');
        $user->save();
    }
}


