<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\roles as roles;
use App\departments as departments;
use App\requests as requests;
use DB;
use Response;


class LoggedController extends Controller
{
    
        public function staff(Request $request){
            if(auth()->check() && auth()->user()->is_staff()) {
                $object = new User();
            $object1 = new roles();
            $id = Auth::id();
            $role_id = User::where('id',$id)->get()[0]['role_id'];
            $role = roles::where('role_id',$role_id)->get();
            $role_des = $role[0]['role_name'];

            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $branch_details = departments::where('dept_id',$branch_id)->get();
            $branch_des = $branch_details[0]['dept_name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
            ];
                return view('staff')->with('data',$data);
            }
            else{
                return redirect()->route('wel');
            }
        }

    
    public function lab_as(Request $request){
        if(auth()->check() && auth()->user()->is_lab_ass()) {
            $object = new User();
            $object1 = new roles();
            $id = Auth::id();
            $role_id = User::where('id',$id)->get()[0]['role_id'];
            $role = roles::where('role_id',$role_id)->get();
            $role_des = $role[0]['role_name'];

            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $branch_details = departments::where('dept_id',$branch_id)->get();
            $branch_des = $branch_details[0]['dept_name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
            ];
            return view('lab_as')->with('data',$data);
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function dept_off(Request $request){
        if(auth()->check() && auth()->user()->is_do()) {
            $object = new User();
            $object1 = new roles();
            $id = Auth::id();
            $role_id = User::where('id',$id)->get()[0]['role_id'];
            $role = roles::where('role_id',$role_id)->get();
            $role_des = $role[0]['role_name'];

            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $branch_details = departments::where('dept_id',$branch_id)->get();
            $branch_des = $branch_details[0]['dept_name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
            ];
            return view('dept_off')->with('data',$data);
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function hod(Request $request){
        if(auth()->check() && auth()->user()->is_hod()) {

            
            // return view('hod');  
            $object = new User();
            $object1 = new roles();
            $id = Auth::id();
            $role_id = User::where('id',$id)->get()[0]['role_id'];
            $role = roles::where('role_id',$role_id)->get();
            $role_des = $role[0]['role_name'];

            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $branch_details = departments::where('dept_id',$branch_id)->get();
            $branch_des = $branch_details[0]['dept_name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
            ];
            return view('hod')->with('data',$data);

        }
        else{
            return redirect()->route('wel');
        }
    }
    public function princi(Request $request){
        if(auth()->check() && auth()->user()->is_p()) {
            $object = new User();
            $object1 = new roles();
            $id = Auth::id();
            $role_id = User::where('id',$id)->get()[0]['role_id'];
            $role = roles::where('role_id',$role_id)->get();
            $role_des = $role[0]['role_name'];

            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $branch_details = departments::where('dept_id',$branch_id)->get();
            $branch_des = $branch_details[0]['dept_name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
            ];
            return view('princi')->with('data',$data);
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function store_manager(Request $request){
        if(auth()->check() && auth()->user()->is_sm()) {
            $object = new User();
            $object1 = new roles();
            $id = Auth::id();
            $role_id = User::where('id',$id)->get()[0]['role_id'];
            $role = roles::where('role_id',$role_id)->get();
            $role_des = $role[0]['role_name'];

            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $branch_details = departments::where('dept_id',$branch_id)->get();
            $branch_des = $branch_details[0]['dept_name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
            ];
            return view('store_manager')->with('data',$data);
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function admin(Request $request){
        if(auth()->check() && auth()->user()->is_admin()) {
    
            return view('admin');
        }
        else{
            return redirect()->route('wel');
        }
    }
    
    public function staffR(Request $request){
        if(auth()->check() ) {
            $id = Auth::id();
            // Logged in user id
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            // $matching = 

            $request1 = DB::select("select * from requests where request_type = 0 and id in(select id from users where dept_id = $branch_id and role_id = 1)");
            $request2 = DB::select("select * from requests where request_type = 1 and id in(select id from users where role_id = 1)");
            $arr = array_merge($request1,$request2);
            // return Response::json($arr);
            // return($request);
            // $request1 = DB::select("select * from requests where request_type = 1");
            // $final = $request->merge($request1);
            // return $request;
            // return $request;
            return view('staffR')->with('data',$arr);
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function labR(Request $request){
        if(auth()->check() ) {
            $id = Auth::id();
            // Logged in user id
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $request = DB::select("select * from requests where id in(select id from users where dept_id = $branch_id and role_id = 2)  ");
            $request1 = DB::select("select * from requests where request_type=1 and role_id=2 ");
            $arr = array_merge($request,$request1);
            // return $arr;
            // $request = $request;
            // return $request;
            return view('labR')->with('data',$request);
        }
        else{
            return redirect()->route('wel');
        }
    }

    
}
