<?php

namespace App\Http\Controllers;
use App\Requesst;
use DB;

use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    public function see(){
        $req = DB::select("select * from requests where status_id=3");
         return view('principlereuest')->with('req',$req);
        
    }

    
}
