<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class loginController extends Controller
{
    public function postlogin (Request $request){
        if (Auth::attempt($request->only('email','password'))){
            return redirect('halamandepan.dasboard');
        }
        return redirect('login');
    }
}
