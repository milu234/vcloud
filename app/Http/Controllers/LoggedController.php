<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoggedController extends Controller
{
    
        public function staff(Request $request){
            if(auth()->check() && auth()->user()->is_staff()) {
                return view('staff');
            }
            else{
                return redirect()->route('wel');
            }
        }

    
    public function lab_as(Request $request){
        if(auth()->check() && auth()->user()->is_lab_ass()) {
            return view('lab_as');
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function dept_off(Request $request){
        if(auth()->check() && auth()->user()->is_do()) {
            return view('dept_off');
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function hod(Request $request){
        if(auth()->check() && auth()->user()->is_hod()) {
            return view('hod');
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function princi(Request $request){
        if(auth()->check() && auth()->user()->is_p()) {
            return view('princi');
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function store_manager(Request $request){
        if(auth()->check() && auth()->user()->is_sm()) {
            return view('store_manager');
        }
        else{
            return redirect()->route('wel');
        }
    }
<<<<<<< HEAD

=======
    public function admin(Request $request){
        if(auth()->check() && auth()->user()->is_admin()) {
            return view('admin');
        }
        else{
            return redirect()->route('wel');
        }
    }
>>>>>>> f236a535db384ed6f5dec23a5b42ce688d5888fb
}
