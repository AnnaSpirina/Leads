<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgodPasswordController extends Controller
{
    public function request() {
        return view('forgot-password');
    }

    public function get(Request $request){
        $request->validate([
            'email' => 'required|string|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );
    
        if ($status === Password::RESET_LINK_SENT){
            return back()->with('status', trans($status));
        }
    
        return back()->withInput($request->only('email'))->withErrors(['email'=>"Пользователь с такой почтой не найден"]);
    }
}
