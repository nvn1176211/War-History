<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller 
{
    public function index()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials)) {
            return redirect()->route('home');       
        }
        return 'Failure'; 
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
