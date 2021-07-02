<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register() {
        return view('client.register');
    }

    public function storeRegister(Request $request){
       
        $this->validate($request, [
            'username' => 'required|max:12|min:6',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'role' => 'user',
            'password' => Hash::make($request->password)
        ]);
        
        Auth::attempt($request->only('username','password'));
        return redirect()->route('home');
    }

    public function login() {
        return view('client.login');
    }

    public function storeLogin(Request $request){
       
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only('username','password'))) {
            return back()->with('status','Invalid login details');
        }

        return redirect()->route('home');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
