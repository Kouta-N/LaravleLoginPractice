<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('showLogin');
    }

    public function exeLogin(LoginFormRequest $request)
    {
          $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // 認証に成功した
            return redirect('home')->with('login_success','ログイン成功');
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています'
        ]);
    }

    public function showHome()
    {
        return view('home');
    }
}