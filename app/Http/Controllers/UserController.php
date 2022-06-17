<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // compact('name') === ['name' => $name]
    public function index()
    {
        $users = User::latest();

        if (request('search')) {
            $users->where('name', 'like', '%' . request('search') . '%')
                 ->orWhere('email', 'like', '%' . request('search') . '%')
                 ->orWhere('address', 'like', '%' . request('search') . '%');
        }
        // $users = User::all();
        return view('pages.user.index', [
            'users' =>$users->get()
        ]);
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

        // $validated['password'] = bcrypt($validated['password']);

        // dd($validated);
        // dd($request->all());

        $user = new User();
        // $user->{kolom_database} = $request->input('input_name');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->password = $request->input('password');
        $user->save();

        return redirect('/user');
    }

    public function create(Request $request)
    {
        return view('pages.user.create');
    }

    public function edit($id)
    {
        $user   = User::whereId($id)->first();
        return view('pages.user.edit', [
            "user" => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required|min:5',
            'password' => 'required|min:5',
            'password_confirm' => 'required|same:password'
        ]);

        // if ($request->password != $user->password) {
        //     $validated['confirm_password'] ='';
        // }

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->save();

        return redirect('/user');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)
            ->delete();
        return redirect('/user')->with('success deleting');
    }
}


