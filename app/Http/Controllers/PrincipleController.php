<?php

namespace App\Http\Controllers;
use App\Requesst;
use DB;
use Auth;

use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    public function see(){
        if(auth()->check() && auth()->user()->is_p()) {
            $req = DB::select("select * from requests where status_id=3");
            return view('principlereuest')->with('req',$req);
        }
        else{
            return redirect()->route('wel');
        }
        
    }

    
}
