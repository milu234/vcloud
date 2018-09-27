<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Requests;
use App\Lab;
use App\Lab_Component;
use DB;
use Auth; 

class LabController extends Controller
{
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
        $values = DB::select("select item_name,item_count,status_id from requests where id= ? order by request_id DESC",[$id]);
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
    public function receivedcomponent()
    {
        $user_id = Auth::user()->id;
        $values = DB::select("select request_id,id,status_id,item_name,item_count from requests where status_id = 6 and id = $user_id");
        return view('labas.receivedcomponent')->with('values',$values);
    }

    // public function sendack($a){
    //     return 123;
    //     return $id;
    //     return $request->input('a');
    //     $user_id = Auth::user()->id;
    //    // DB::('update track_requests set status_id = 7 where');
    // }
    public function updatestatus(Request $request,$request_id){
        if(auth()->check() && auth()->user()->is_lab_ass()) {
            DB::select("update requests set status_id = 7 where request_id = $request_id");
                return redirect('lab_as/received-component');
        }
    }

}
