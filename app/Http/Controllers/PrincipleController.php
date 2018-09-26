<?php

namespace App\Http\Controllers;
use App\Requesst;
use App\Lab_Component;
use DB;
use Mattwebsite\Excel\Facades\Excel;
use App\Exports\PrinciExport;
use Auth;

use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    public function see(){
        if(auth()->check() && auth()->user()->is_p()) {
            $req = DB::select("select * from requests where status_id=3");
            return view('principlereuest')->with('sreq',$req);
        }
        else{
            return redirect()->route('wel');
        }
        
    }

    public function export($type){
        return Excel::download(new PrinciExport, 'components.' . $type);

    }
    
}
