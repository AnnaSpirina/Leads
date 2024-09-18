<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function show() {
        return view('registration');
    }

    public function create(Request $request) {
        $request->validate([
            'email' => 'required|string|email|unique:users|max:40',
            'password' => 'required|confirmed|min:6|max:6'
        ]);
        $user = User::create([
            'email' => $request->email,
            'password'=>$request->password
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
