<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\AdminLogin;
use App\User;

class LoginController extends Controller
{
    public function showFormLogin()
    {
    	return view('back.login.form');
    }

    public function login(AdminLogin $request) 
    {
    	$remember = $request->remember_me == 'on' ? true : false;
        if(!auth()->attempt(request(['email', 'password']), $remember)) {
    		return redirect()->back()->withErrors(['message' => 'خطأ في الإيميل أو كلمة المرور']);
    	}
    	return redirect('/admin');
    }

    public function logout()
    {
         auth()->logout();
         return redirect('/admin');
    }
}
