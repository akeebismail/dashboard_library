<?php

namespace App\Http\Controllers;

use App\Http\Request\HallAdminRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::all();
        $list = $admin->map(function (User $user){
            $data = new User();
            $data->first_name = $user->first_name;
            $data->last_name    = $user->last_name;
            $data->username     = $user->username;
            $data->roomAssigned = $user->roomAssigned;
            $data->level        = $user->level;
            return $data;
        })->all();
        //return $list;
        return view('supperuser.adminlist',['admin'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supperuser.addadmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HallAdminRequest $request)
    {
        $user = new User();
        $user->first_name   =   $request->first_name;
        $user->last_name    =   $request->last_name;
        $user->username     =   $request->username;
        $user->level        =   1;
        $user->status       =   1;
        $user->password     =   bcrypt($request->password);
        $user->room_id      =   $request->hall;
        $user->save();
        $request->session()->flash('success','Room Admin Added Successfully');
        return redirect()->route('room.index');
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
        return view('admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('supperuser.edit',compact(''));
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
