<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth; 
Use DB;  

class LoginController extends Controller
{
    public function dash(Request $request){
        
        if(auth()->check() && auth()->user()->is_staff()) {
            return redirect()->route('Logged.staff');
        }
         else if(auth()->check() && auth()->user()->is_lab_ass()) {
            return redirect()->route('Logged.lab_as');
        }
        else if(auth()->check() && auth()->user()->is_do()) {
            return redirect()->route('Logged.dept_off');
        }
        else if(auth()->check() && auth()->user()->is_hod()) {
            return redirect()->route('Logged.hod');
        }
        else if(auth()->check() && auth()->user()->is_p()) {
            return redirect()->route('Logged.princi');
        }
         else if(auth()->check() && auth()->user()->is_sm()) {
            return redirect()->route('Logged.store_manager');
        }
        else if(auth()->check() && auth()->user()->is_admin()) {
            return redirect()->route('Logged.admin');
        }
        else if(auth()->check() && auth()->user()->is_unregis()) {
            return redirect()->route('wel');
        }
    
    }
    
    public function loginuser(Request $request){
        

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
            return redirect()->route('login');
        }
    }
    else{
        return redirect()->route('login');
    }
        return redirect()->back();
    }

    public function adminIndex(){
        if(auth()->check() && auth()->user()->is_admin()) {
            $drop_down1 = DB::table('departments')->pluck('dept_name');
            $drop_down2 = DB::table('roles')->pluck('role_name');
            return view('admin.add-user',['drop_down_fetched_from_DB1' => $drop_down1,'drop_down_fetched_from_DB2' => $drop_down2]);
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function adminStore(Request $request)
    {
        if(auth()->check() && auth()->user()->is_admin()) {
            $users = new User;
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->password = Hash::make($request->input('password'));
            $role_name = $request->input('role_id');
            $users->role_id = DB::table('roles')->where('role_name',$role_name)->pluck('role_id')[0];
            $dept_name = $request->input('dept_id');
            $users->dept_id = DB::table('departments')->where('dept_name',$dept_name)->pluck('dept_id')[0];
            $users->save();
            return redirect()->route('Logged.admin');
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function update(Request $request){
        $users_data = DB::table('users')->select('id','name','email','role_id','dept_id')->get();
        return view('admin.manage-user')->with('users_data',$users_data);
        if(auth()->check() && auth()->user()->is_admin()) {
            $users_data = DB::table('users')->select('name','email','role_id','dept_id')->get();
            return view('admin.manage-user')->with('users_data',$users_data);
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function edit(Request $request,$id){
        if(auth()->check() && auth()->user()->is_admin()) {
            $user_data = DB::table('users')->select('id','name','email','role_id','dept_id')->find($id);
            $drop_down1 = DB::table('departments')->pluck('dept_id');
            $drop_down2 = DB::table('roles')->pluck('role_id');
            // return 1;
            
            return view('admin.edit-user',['drop_down_fetched_from_DB1' => $drop_down1,'drop_down_fetched_from_DB2' => $drop_down2])->with('user_data',$user_data);
        }
        else{
            return redirect()->route('wel');
        }
        $user_data = DB::table('users')->select('name','email','role_id','dept_id')->find($id);
        $drop_down1 = DB::table('departments')->pluck('dept_id');
        $drop_down2 = DB::table('roles')->pluck('role_id');
        return view('admin.edit-user',['drop_down_fetched_from_DB1' => $drop_down1,'drop_down_fetched_from_DB2' => $drop_down2])->with('user_data',$user_data);
        // $drop_down1 = DB::table('departments')->pluck('dept_name');
        // $drop_down2 = DB::table('roles')->pluck('role_name');
        // return view('admin.add-user',['drop_down_fetched_from_DB1' => $drop_down1,'drop_down_fetched_from_DB2' => $drop_down2]);
    }

    public function userChanges(Request $request,$id)
    {
        $users = new User;
         $users->name = $request->input('name');
         $users->email = $request->input('email');
         $users->role_id = $request->input('role_id');
         $users->dept_id = $request->input('dept_id');
         $users->id = $request->input('dept_id');
        // return 1;
         DB::table('users')->where('id',$id)->update(['name'=>$users->name,'email'=>$users->email,'role_id'=>$users->role_id,'dept_id'=>$users->dept_id]);
                 
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $role_id = $request->input('role_id');
        // $dept_id = $request->input('dept_id');
        // DB::update('update users set name = ?,set email= ?, set dept_id=?, set role_id= ? where id = ?',[$name,$email,$dept_id,$role_id,$id]);
        // echo "Record updated successfully.<br/>";
    
        // if($users->name != $request->name){
        //     DB::select("update users set name=$request->name where id =$id");
        // }
        // if($users->email != $request->email){
        //     DB::select("update users set email=$request->email where id =$id");
        // }
        // if($users->dept_id != $request->dept_id){
        //     DB::select("update users set email=$request->dept_id where id =$id");
        // }
        // if($users->role_id != $request->role_id){
        //     DB::select("update users set email=$request->role_id where id =$id");
        // }
        return redirect()->route('manage_user');

    }

}
