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
            $users = DB::table('users')
                    ->join('staff__components','staff__components.id','=','users.id')
                    ->select('users.name','users.email','staff__components.item_name','staff__components.working','staff__components.spare')
                    ->get();
                    return view('hodrequest')->with('users',$users);
        }
        else{
            return redirect()->route('wel');
        }
    }
    

    public function export($type){
        if(auth()->check() && auth()->user()->is_hod()) {
            return Excel::download(new UsersExport, 'staff__components.' . $type);
        }
        else{
            return redirect()->route('wel');
        }
    }

}
