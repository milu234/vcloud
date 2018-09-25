<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\requests as Requesst ;

use App\Http\Resources\Requesst as RequesstResource;

class RequesstController extends Controller
{
    public function index(){
        $req = Requesst::paginate(2);
        return RequesstResource::collection($req);

    }
    

    
}
