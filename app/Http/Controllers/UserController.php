<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->mobile = $req->mobile;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect('/signin');
    }

    public function signin(Request $req){
        $userdata = array(
            'email'     => $req->email,
            'password'  => $req->password
        );
        if (Auth::attempt($userdata)) {
            if(Auth::User()->role == 'user'){
                return redirect("home");
            }else{
                return redirect("/admin/home");
            }
        } else {        
            return redirect()->back();
        }
    }
}
