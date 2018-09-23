<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;   

class LoginController extends Controller
{
    public function login(Request $request){
        

        if(Auth::attempt([
            'email' => $request->email,
            'password'=> $request->password,
        ])){

        $user = User::where('email', $request->email)->first();
        if($user->is_staff()){
            return redirect()->route('Logged.staff');
        }
        if($user->is_lab_ass()){
            return redirect()->route('Logged.lab_as');
        }
        if($user->is_do()){
            return redirect()->route('Logged.dept_off');
        }
        if($user->is_hod()){
            return redirect()->route('Logged.hod');
        }
        if($user->is_p()){
            return redirect()->route('Logged.princi');
        }
        if($user->is_sm()){
            return redirect()->route('Logged.store_manager');
        }
        if($user->is_admin()){
            return redirect()->route('Logged.admin');
        }
        if($user->is_unregis()){
            return redirect()->route('/');
        }
    }
        return redirect()->back();
    }
}
