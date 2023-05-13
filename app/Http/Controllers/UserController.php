<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myAccount(){

        $user = Auth::user();

        return view('user.account',[
            'user' => $user
        ]);
    }

    public function patchUser(Request $request){

            $user = Auth::user();

            if ($request->hasFile('avatar')) {
                $path = $request->file('avatar')->store('avatars', 'public');
                $user->avatar = $path;
                $user->save();
            }

            return redirect()->route('account');
    }
}
