<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        return view('login');
    }

    public function login(Request $request){
        $validate = $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($validate)) {
            $request->session()->regenerate();

            return redirect('/home');
        }

        return redirect('/payment')->with('SuccessPaymet', 'Your payment is success, enjoy the app!');
    }

    public function logout() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}


