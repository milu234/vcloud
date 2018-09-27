<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;

class HodController extends Controller
{
    
        public function see(){
            if(auth()->check() && auth()->user()->is_hod()) {
            $id = Auth::id();
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            $requests = DB::select("select * from requests as r where status_id = 2 and id in (select id from users as u where u.dept_id = $branch_id)");
                return view('hodrequest')->with('data',$requests);
        }
        else{
            return redirect()->route('wel');
        }
    }
    

    public function export($type){
        if(auth()->check() && auth()->user()->is_hod()) {
            Excel::download(new UsersExport, 'staff__components.' . $type);
            return Excel::download(new UsersExport, 'staff__components.' . $type);
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function accept($req_id){
        if(auth()->check() && auth()->user()->is_hod()) {
            $id = Auth::id();
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            DB::table('requests')
                ->where('request_id',$req_id)
                ->update(['status_id'=>3]);
            $requests = DB::select("select * from requests where status_id = 2 and id in (select id from users as u where u.dept_id = $branch_id)");
            return redirect()->route('hod_req')->with('data',$requests);
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function reject($req_id){
        if(auth()->check() && auth()->user()->is_hod()) {
            $id = Auth::id();
            $branch_id = User::where('id',$id)->get()[0]['dept_id'];
            DB::table('requests')
                ->where('request_id',$req_id)
                ->update(['status_id'=>8]);
            $requests = DB::select("select * from requests where status_id = 2 and id in (select id from users as u where u.dept_id = $branch_id)");
            return redirect()->route('hod_req')->with('data',$requests);
        }
        else{
            return redirect()->route('wel');
        }
    }

}
