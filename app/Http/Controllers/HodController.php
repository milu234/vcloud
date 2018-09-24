<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\User;
use DB;

class HodController extends Controller
{
    public function see(){
        $users = DB::table('users')
                ->join('staff__components','staff__components.id','=','users.id')
                ->select('users.name','users.email','staff__components.item_name','staff__components.working','staff__components.spare')
                ->get();
        return view('hodrequest',['users'=>$users]);
    }

    public function export($type){
        return Excel::download(new UsersExport, 'staff__components.' . $type);


    }

}
