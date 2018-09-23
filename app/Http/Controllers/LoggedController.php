<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoggedController extends Controller
{
    public function staff(Request $request){
        return view('staff');
    }
    public function lab_as(Request $request){
        return view('lab_as');
    }
    public function dept_off(Request $request){
        return view('dept_off');
    }
    public function hod(Request $request){
        return view('hod');
    }
    public function princi(Request $request){
        return view('princi');
    }
    public function store_manager(Request $request){
        return view('store_manager');
    }
    public function admin(Request $request){
        return view('admin');
    }
}
