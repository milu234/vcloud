<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Requests;
use App\Lab;
use App\Lab_Component;
use DB;
use App\Http\Resources\Lab_Component as Lab_ComponentResource;
use Auth; 

class LabController extends Controller
{
    public function index(){
        $comp = Lab_Component::paginate(2);
        return Lab_ComponentResource::collection($comp);
    }
    public function create()
    {
        if(auth()->check() && auth()->user()->is_lab_ass()) {
            return view('labas.create');
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function history()
    {
        $id = Auth::user()->id;
        $values = DB::select("select item_name,item_count,status_id from requests where id= ?",[$id]);
        return view('labas.history')->with('values',$values);
        if(auth()->check() && auth()->user()->is_lab_ass()) {
            $values = DB::select("select item_name,item_count from requests where id=14");
            return view('labas.history')->with('values',$values);
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function store(Request $request)
    {
        if(auth()->check() && auth()->user()->is_lab_ass()) {
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
        else{
            return redirect()->route('wel');
        }
    }

    public function labcomp()
    {
        $id = Auth::user()->id;
        $labid = DB::select("select lab_id from labs where id=?",[$id]);
        $values = DB::select("select item_name , spare ,working ,not_working from lab__components where lab_id=?",[$labid[0]->lab_id]);
        return view('labas.labcomp')->with('values', $values);
    }

}
