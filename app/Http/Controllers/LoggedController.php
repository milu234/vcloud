<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\roles as roles;
use App\department as departments;
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
                $branch_details = department::where('dept_id',$branch_id)->get();
                $branch_des = $branch_details[0]['dept_name'];
                $total = DB::table('requests')->where('id',$id)->count();
                $current = DB::table('requests')->where('id',$id)->where('status_id',1)->count();
                $pending = DB::table('requests')->where('id',$id)->where('status_id',4)->count();
                $received = DB::table('requests')->where('id',$id)->where('status_id',6)->count();
                $name = User::where('id',$id)->get()[0]['name'];

                $data = [
                    'role'  => $role_des,
                    'branch'   => $branch_des,
                    'total' => $total,
                    'current' => $current,  
                    'pending' => $pending,
                    'received' => $received,
                    'name' => $name
                    
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
            $total = DB::table('requests')->where('id',$id)->count();
            $current = DB::table('requests')->where('id',$id)->where('status_id',1)->count();
            $pending = DB::table('requests')->where('id',$id)->where('status_id',4)->count();
            $received = DB::table('requests')->where('id',$id)->where('status_id',6)->count();
            $name = User::where('id',$id)->get()[0]['name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
                'total' => $total,
                'current' => $current,  
                'pending' => $pending,
                'received' => $received,
                'name' => $name
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
            $total = DB::table('requests')->where('id',$id)->count();
            $current = DB::table('requests')->where('id',$id)->where('status_id',1)->count();
            $pending = DB::table('requests')->where('id',$id)->where('status_id',4)->count();
            $received = DB::table('requests')->where('id',$id)->where('status_id',6)->count();
            $name = User::where('id',$id)->get()[0]['name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
                'total' => $total,
                'current' => $current,  
                'pending' => $pending,
                'received' => $received,
                'name' => $name
            ];
            return view('dept_off')->with('data',$data);
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function hod(Request $request){
        if(auth()->check() && auth()->user()->is_hod()) {
            $object = new User();
            $object1 = new roles();
            $id = Auth::id();
            $role_id = User::where('id',$id)->get()[0]['role_id'];
            $role = roles::where('role_id',$role_id)->get();
            $role_des = $role[0]['role_name'];
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $branch_details = departments::where('dept_id',$branch_id)->get();
            $branch_des = $branch_details[0]['dept_name'];
            $total = DB::table('requests')->where('id',$id)->count();
            $current = DB::table('requests')->where('id',$id)->where('status_id',1)->count();
            $pending = DB::table('requests')->where('id',$id)->where('status_id',4)->count();
            $received = DB::table('requests')->where('id',$id)->where('status_id',6)->count();
            $name = User::where('id',$id)->get()[0]['name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
                'total' => $total,
                'current' => $current,  
                'pending' => $pending,
                'received' => $received,
                'name' => $name
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
            $total = DB::table('requests')->where('id',$id)->count();
            $current = DB::table('requests')->where('id',$id)->where('status_id',1)->count();
            $pending = DB::table('requests')->where('id',$id)->where('status_id',4)->count();
            $received = DB::table('requests')->where('id',$id)->where('status_id',6)->count();
            $name = User::where('id',$id)->get()[0]['name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
                'total' => $total,
                'current' => $current,  
                'pending' => $pending,
                'received' => $received,
                'name' => $name
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
            $total = DB::table('requests')->where('id',$id)->count();
            $current = DB::table('requests')->where('id',$id)->where('status_id',1)->count();
            $pending = DB::table('requests')->where('id',$id)->where('status_id',4)->count();
            $received = DB::table('requests')->where('id',$id)->where('status_id',4)->count();
            $name = User::where('id',$id)->get()[0]['name'];
            $data = [
                'role'  => $role_des,
                'branch'   => $branch_des,
                'total' => $total,
                'current' => $current,  
                'pending' => $pending,
                'received' => $received,
                'name' => $name
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
        if(auth()->check() && auth()->user()->is_do()) {
            $id = Auth::id();
            // Logged in user id
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
     $request_from_dept = DB::select("SELECT a.name,a.dept_id,b.item_name,b.item_count,b.request_id
            FROM users AS a inner join requests b
                      ON a.id = b.id and a.dept_id=$branch_id and b.status_id=1 and b.role_id=1");

             
            $request1 = DB::select("select * from requests where request_type = 0 and id in(select id from users where dept_id = $branch_id and role_id = 1) and status_id =1");
            $request2 = DB::select("select * from requests where request_type = 1 and id in(select id from users where role_id = 1) and status_id =1");
            $arr = array_merge($request1,$request2);
            return view('staffR')->with('data',$arr);
            return view('staffR')->with('data',$request_from_dept);
        }
        else{
            return redirect()->route('wel');
        }
    }


    public function labR(Request $request){
        if(auth()->check() && auth()->user()->is_do()) {
            $id = Auth::id();
            // Logged in user id
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $request1 = DB::select("select * from requests where request_type = 0 and id in(select id from users where dept_id = $branch_id and role_id = 2)");
            $request2 = DB::select("select * from requests where request_type = 1 and id in(select id from users where role_id = 2  )");
            $arr = array_merge($request1,$request2);
            // return $arr;
            // $request = $request;
            // return $request;
            // return view('labR')->with('data',$arr);
            // $select_lab_no = DB::select("SELECT a.name,a.lab_no,b.request_id
            // FROM labs AS a inner join requests b
            //           ON a.id = b.id and a.dept_id=$branch_id and b.status_id=1 and b.role_id=2");
        
        $request_from_dept = DB::select("SELECT a.name,a.dept_id, b.item_name,b.item_count,b.request_id,c.lab_no
        FROM users a, requests b, labs c
        WHERE a.id = b.id
        AND b.id = c.id
        AND a.dept_id = $branch_id
        AND b.role_id = 2
        AND b.status_id=1");

                      
            // return $request_from_dept;
            return view('labR')->with('data',$request_from_dept);
        }
        else{
            return redirect()->route('wel');
        }
    }


    public function forward_by_staff(Request $request,$req_id){
        if(auth()->check() && auth()->user()->is_do()) {
            $request2 = DB::select("update requests set status_id = 2 where request_id = $req_id");
            return redirect()->route('staffR');
        }
        else{
            return redirect()->route('wel');
        }
    }

    // public function fillstoremanager(){
    //     return view('store_manager_fill_indent');
    // }

    public function reqstoremanager(Request $request){
        if(auth()->check() && auth()->user()->is_sm()){
            $req = DB::select("SELECT a.item_name,a.item_count,b.name,a.request_id,c.dept_name 
                                from requests a, users b, departments c
                                where a.id = b.id
                                and b.dept_id = c.dept_id
                                and a.status_id = 4");
                                // return $req;
            return view('store_manager_requests')->with('data',$req);
         } else{
            return view('wel');
        }
        
    }

   public function editindent(Request $request ,$req_id){
    if(auth()->check() && auth()->user()->is_sm()){
        $req = DB::select("select * from requests where request_id = $req_id");
        return view('store_manager_fill_indent')->with('data2',$req);
    } else {
        return view('wel');
    }
       
       
   }
    public function compstoremanager(Request $request){
        if(auth()->check() && auth()->user()->is_sm()){
            $req = DB::select("SELECT a.item_name,a.item_count,b.name,a.request_id,c.dept_name 
            from requests a, users b, departments c
            where a.id = b.id
            and b.dept_id = c.dept_id
            and a.status_id = 5");

            return view('store_manager_components')->with('data',$req);
        } else {
            return view('wel');
        }

        }

    public function acknowledge(Request $request,$request_id){
        if(auth()->check() && auth()->user()->is_sm()){
            $req = DB::select("update requests set status_id = 6 where request_id=$request_id");
            return redirect('store_manager/components');    
        } else {
            return view('wel');
        }
        
    }


    public function historystoremanager(Request $request){
        if(auth()->check() && auth()->user()->is_sm()){
            $req = DB::select("SELECT a.item_name,a.item_count,b.name,a.request_id,c.dept_name 
            from requests a, users b, departments c
            where a.id = b.id
            and b.dept_id = c.dept_id
            and a.status_id = 6");

            return view('store_manager_history')->with('data',$req);
        } else {
            return view('wel');
        }

        }
        

    public function check_by_staff(Request $request,$req_id){
        if(auth()->check() && auth()->user()->is_do()) {
            $what_you_want = requests::where('request_id',$req_id)->get(['item_name'])[0]['item_name'];
            $how_much_you_want = requests::where('request_id',$req_id)->get(['item_count'])[0]['item_count'];
            $id = Auth::id();
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            
            $potential_in_dept = DB::select("SELECT a.name,a.dept_id,b.item_name,b.spare,a.id
            FROM users AS a inner join staff__components b
                      ON a.id = b.id  and b.item_name like '$what_you_want' and b.spare >=$how_much_you_want and a.dept_id=$branch_id");
            
            $potential_out_dept = DB::select("SELECT a.name,a.dept_id,b.item_name,b.spare,a.id
            FROM users AS a inner join staff__components b
                      ON a.id = b.id  and b.item_name like '$what_you_want' and b.spare >=$how_much_you_want and a.dept_id!=$branch_id");

            $arr = array();
            array_push($arr,$potential_in_dept,$potential_out_dept,$req_id);
            
            return view('checkAvail')->with('data',$arr);
        }
        else{
            return redirect()->route('wel');
        }
    }



    public function forward_by_lab(Request $request,$req_id){
        if(auth()->check() && auth()->user()->is_do()) {
            $request2 = DB::select("update requests set status_id = 2 where request_id = $req_id");
            return redirect()->route('labR');
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function check_by_lab(Request $request,$req_id){
        if(auth()->check() && auth()->user()->is_do()) {
            $what_you_want = requests::where('request_id',$req_id)->get(['item_name'])[0]['item_name'];
            $how_much_you_want = requests::where('request_id',$req_id)->get(['item_count'])[0]['item_count'];
            $id = Auth::id();
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            
             $potential_in_dept = DB::select("SELECT a.name,a.dept_id,a.id, b.item_name,b.spare,c.lab_no
             FROM users a, lab__components b, labs c 
             WHERE a.id = c.id
             AND b.lab_id = c.lab_id
             AND a.dept_id = $branch_id
             AND b.item_name like '$what_you_want' 
             AND b.spare >=$how_much_you_want   
             ");

            $potential_out_dept = DB::select("SELECT a.name,a.dept_id,a.id, b.item_name,b.spare,c.lab_no
            FROM users a, lab__components b, labs c 
            WHERE a.id = c.id
            AND b.lab_id = c.lab_id
            AND a.dept_id != $branch_id
            AND b.item_name like '$what_you_want' 
            AND b.spare >=$how_much_you_want
            ");
                      
            $arr = array();
            array_push($arr,$potential_in_dept,$potential_out_dept,$req_id);
            // return $arr;
            return view('checkAvaillab')->with('data',$arr);
        }
        else{
            return redirect()->route('wel');
        }
    }
    public function send_req_to_staff(Request $request,$req_id,$avail_id){
        if(auth()->check() && auth()->user()->is_do()) {
            $id = Auth::id();
            $request1 = DB::select("update requests set status_id =9  where request_id = $req_id");
            $request2 = DB::select("INSERT INTO track_requests VALUES (NULL,'$req_id','$id','$avail_id','9')");
            return redirect()->route('staffR');
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function send_req_to_lab(Request $request,$req_id,$avail_id){
        if(auth()->check() && auth()->user()->is_do()) {
            $id = Auth::id();
            $request1 = DB::select("update requests set status_id =9  where request_id = $req_id");
            $request2 = DB::select("INSERT INTO track_requests VALUES (NULL,'$req_id','$id','$avail_id','9')");
            
            return redirect()->route('labR');
        }
        else{
            return redirect()->route('wel');
        }
    }
    
}






     

            

        








































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































