<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Requesst;
use App\Lab_Component;
use DB;

use App\Exports\PrinciExport;
use Auth;

use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    public function see(){
        if(auth()->check() && auth()->user()->is_p()) {
            $data = DB::select("select * from requests where status_id=3");
            return view('principlerequest')->with('data',$data);
        }
        else{
            return redirect()->route('wel');
        }
        
    }
    

    public function export($type){
        if(auth()->check() && auth()->user()->is_p()) {
            Excel::download(new UsersExport, 'staff__components.' . $type);
            return Excel::download(new UsersExport, 'staff__components.' . $type);
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function accept($req_id){
        if(auth()->check() && auth()->user()->is_p()) {
            DB::table('requests')
                ->where('request_id',$req_id)
                ->update(['status_id'=>4]);
            $requests = DB::select('select * from requests where status_id = 3');
            return redirect()->route('princi_req')->with('data',$requests);
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function reject($req_id){
        if(auth()->check() && auth()->user()->is_p()) {
            DB::table('requests')
                ->where('request_id',$req_id)
                ->update(['status_id'=>8]);
            $requests = DB::select('select * from requests where status_id = 3');
            return redirect()->route('princi_req')->with('data',$requests);
        }
        else{
            return redirect()->route('wel');
        }
    }

    
}
