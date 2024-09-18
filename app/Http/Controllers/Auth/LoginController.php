<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function show() {
        return view('authorization');
    }

    public function login(Request $request){
        
        $data=$request->validate([
            'email' => 'required|string|email|max:40',
            'password' => 'required|min:6|max:6'
        ]);
        
        if(!Auth::attempt($data)){
            throw ValidationException::withMessages([
                'email' => 'Пользователь не найден'
            ]);
        }
        $request->session()->regenerate();
        return redirect('/');
    }

    public function logout(Request $request) {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
        return redirect('/');
    }
}
