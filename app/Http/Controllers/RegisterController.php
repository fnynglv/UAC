<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerForm(){
        $price = 250000;
        // dana awal user

        return view('register', compact('price'));
    }

    public function register(Request $request){
        $validate = $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'job'=>'required|min:3|max:255|',
            'linkedin'=>'required|min:3|max:255|',
            'phone'=>'required|regex:/^[0-9]+$',
            'password'=>'required',
            'wallet'=>'required',
            'money'=>'required',
            'profile_photo' => 'required|image|file'
        ]);

        $validate['profile_photo'] = $request->file('profile_photo')->store('user_profile');
        $validate['password'] = bcrypt($validate['password']);

        if($request->money <= 24999) {
            return redirect()->back()->with('Payerror', 'You are still underpaid');
        } else {
            // update money setelah dikurangin
            $validate['wallet'] = $validate['money'] - $validate['wallet'];
            User::create($validate);
        }

        return redirect('/login')->with('registerSuccess', 'Now You Have an Account, Login!');
    }
}
