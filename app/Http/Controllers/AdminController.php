<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Hash;
Use DB;


class AdminController extends Controller
{

    public function index(){
        //Get Admin
        $admin = User::paginate(10);

        return UserResource::collection($admin);

        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));
        $role_name = $request->input('role_id');
        $users->role_id = DB::table('roles')->where('role_name',$role_name)->pluck('role_id')[0];
        $dept_name = $request->input('dept_id');
        $users->dept_id = DB::table('departments')->where('dept_name',$dept_name)->pluck('dept_id')[0];
        $users->save();


         $user  = $request->isMethod('put') ? User::findOrFail($request->id) : new User;
         $user->id = $request->input('id');
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->role_id = $request->input('role_id');
         $user->dept_id = $request->input('dept_id');
         $user->save();

         if($user->save()){
             return new UserResource($user);
         }
         
         
         
         
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
