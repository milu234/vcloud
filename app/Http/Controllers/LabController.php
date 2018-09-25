<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Requests;
use App\Lab;
use App\Lab_Component;
use DB;
use App\Http\Resources\Lab_Component as Lab_ComponentResource;

class LabController extends Controller
{
    public function index(){
        $comp = Lab_Component::paginate(2);
        return Lab_ComponentResource::collection($comp);
    }
    public function create()
    {
        return view('labas.create');
    }

    public function history()
    {

        $values = DB::select("select item_name,item_count from requests where id=14");
        return view('labas.history')->with('values',$values);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'item_name' => 'required',
            'item_count'  => 'required',
        ]);
        $requests =  new Requests;
        $requests->item_name = $request['item_name'];
        $requests->item_count = $request['item_count'];
        $requests->id = Auth::user()->id;
        $requests->request_type = 0;
        $requests->status_id = 1;
        $requests->save();
        return redirect('/lab_as');
    }

    public function labcomp()
    {
        
    }

}
