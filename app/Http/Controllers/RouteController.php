<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{

public function welcome_view(){
    return view('welcome');
}
    public function signin_view(Request $req){
        if(Auth::check()){
            return redirect('/');
        }else{
            return view("auth.signin");
        }
    }

    public function signup_view(Request $req){
        if(Auth::check()){
            return redirect('/');
        }else{
            return view("auth.signup");
        }
    }


}
