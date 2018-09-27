<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Illuminate\Support\Facades\Auth;
use DB;

class StaffController extends Controller
{
    public function create()
    {
        return view('staff.create');
    }

    public function history()
    {
        $id = Auth::user()->id;
        $values = DB::select("select item_name,item_count,status_id from requests where id= ? order by request_id DESC",[$id]);
        return view('staff.history')->with('values',$values);
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
        return redirect('/staff');
    }

    public function receivedcomponent()
    {
        $user_id = Auth::user()->id;
        $values = DB::select("select request_id,id,status_id,item_name,item_count from requests where status_id = 6 and id = $user_id");
        return view('staff.receivedcomponent')->with('values',$values);
    }

    public function updatestatus(Request $request,$request_id){
        if(auth()->check() && auth()->user()->is_staff()) {
            DB::select("update requests set status_id = 7 where request_id = $request_id");
                return redirect('staff/received-component');
        }
    }
    public function staffcomp(){
        $user_id =  Auth::user()->id;
        $values = DB::select("select sc_id,item_name,spare,working,not_working from staff__components where id =$user_id");
        //return $values;
        return view('staff.staffcomponent')->with('values',$values);
    }

}
