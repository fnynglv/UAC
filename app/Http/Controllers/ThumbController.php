<?php

namespace App\Http\Controllers;

use App\Models\Thumb;
use Illuminate\Http\Request;

class ThumbController extends Controller
{
    public function thumb(Request $request) {

        if(!auth()->check()) {
            return view('register')->with('ErrorMsg', 'You have no acc, register first');
        }

        // dibutuhkan minimal 2 user (A - aku, B - orang lain)
        $userA = auth()->user()->id;
        $userB = $request->randomID;

        // ngecek id yang sama ga boleh nge'thumb' ke id sendiri
        $thumb = Thumb::where('id_userA', $userA)->where('id_userB', $userB)->first();

        if ($thumb !== null && $thumb->status_userA != "Thumb") {
            $thumb->status_userA = "Thumb";
            $thumb->status_userB = "Thumb";

            $thumb->save();
        }

        if(!$thumb) {
            Thumb::create([
                'id_userA' => $userA,
                'id_userB' => $userB,
                'status_userA' => "Thumb",
                'status_userB' => "Wishlist"
            ]);
        }

        return redirect('/home')->with('match', 'Now You Can Communicate!');;
    }
}
