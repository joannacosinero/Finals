<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $users = User::orderByRaw('lname, fname')->get();
        return view('users.index', ['users'=>$users]);
    }
    public function create() {
        return view('users.create');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'lname'    => 'required',
            'fname'    => 'required',
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        User::create([
            'lname'    => $request['lname'],
            'fname'    => $request['fname'],
            'email'    => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
            return redirect('/users')->with('info', 'A new user is created.');
    }
    public function edit($id){
        $user = User::find($id);
        
        return view('users.edit', ['user'=>$user]);
    }
    public function update(Request $request, $id) {
        $user = User::find($id);

        $user->update($request->all());

        return redirect('/users')->with('info', "The record of $user->fname $user->lname.");
    }
}