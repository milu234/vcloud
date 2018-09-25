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
        $values = DB::select("select item_name,item_count,status_id from requests where id= ?",[$id]);
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

}
