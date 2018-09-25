<?php

namespace App\Http\Controllers;
use App\Requesst;
use App\Lab_Component;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PrinciExport;

use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    public function see(){
        $req = DB::select("select * from requests where status_id=3");
         return view('principlereuest')->with('req',$req);
        
    }

    public function export($type){
        return Excel::download(new PrinciExport, 'components.' . $type);

    }
    
}
