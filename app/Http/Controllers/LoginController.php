<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('pages.login', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('errorlogin', 'Sorry the credentials you are using are invalid!');
    }

    public function logout()
    {
        Auth::logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }
}
