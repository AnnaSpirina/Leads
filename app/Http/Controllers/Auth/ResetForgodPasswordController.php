<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Support\Str;

class ResetForgodPasswordController extends Controller
{
    public function request(Request $request) {
        return view('change-password', ['request' => $request]);
        dd();
    }

    public function change(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|string|email|max:40',
            'password' => 'required|confirmed|min:6|max:6'
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request){
                $user->forceFill([
                    'password' => $request->password,
                    'remember_token' => Str::random(60)
                ])->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('authorization')->with('status', trans($status));
        }

        return back()->withInput($request->only('email'))->withErrors(['email' => "Не удалось поменять пароль"]);
    }
}