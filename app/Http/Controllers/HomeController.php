<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $user = auth()->user();

        $randomUser = User::where('id', '!=', $user->id)->get();

        return view('home', compact('randomUser', 'auth'));

    }
}
