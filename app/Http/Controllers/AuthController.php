<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        $title = 'Регистрация ползователей'; // замените => на =
        return view('register', compact('title')); // уберите $ перед 'title'
    }
    
    public function registerPost(Request $request)
    {
        $user = new User();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->rolle = $request->rolle;
        $user->password = Hash::make($request->password); 
        
        $user->save();
        
        return back()->with('success', 'Регистрация завершена успешно!'); 
    }
    

    public function login ()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'Вход выполнен успешно!');
        }

        return back()->with('error', 'Ошибка входа!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
    
}
