<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\requests as requests;
use DB;

class IndentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request_id)
    {
        // $req=requests::find($request_id);
        //   return view('store_manager_fill_indent')->with('data',$req);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($request_id)
    {
        //   $req=requests::find($request_id);
        $req_details = DB::select("SELECT a.item_name,a.item_count,b.name,c.dept_name
                                    From requests a,users b,departments c
                                    WHERE a.id = b.id
                                    AND   b.dept_id = c.dept_id
                                    AND a.request_id = $request_id
                                ");
                                // return $req_details;
          return view('store_manager_fill_indent')->with('data',$req_details);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $request_id)
    {
        $this->validate($request,[
            'id' => 'required',
            'item_name'=>'required',
            'item_count'=>'item_count'
        ]);
        $req = new requests;
        $req = requests::find($request_id);
        $req->id=$request->input('id');
        $req->item_name=$request->input('item_name');
        $req->item_count=$request->input('item_count');
        $req->save();

        return redirect('store_manager')->with('success','Completed');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
