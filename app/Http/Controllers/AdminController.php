<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\User;
use App\Profile;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $userlist = DB::table('users')
                    ->join('profiles', 'profiles.userId', '=', 'users.userId')
                    ->select('profiles.fullname','users.username','users.type','users.userId')
                    ->get();
        return view('admin.userlist',compact('userlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $profile = Profile::find($id);

        return view('admin.details')
                    ->with('user',$user)
                    ->with('profile',$profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::find($id);
         $profile = Profile::find($id);

         return view('admin.edit')
                ->with('user',$user)
                ->with('profile',$profile);
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
         $userType = User::find($id);
        if($userType->type == $request->type){
            Session()->flash('Error', "Your Selected User type Already Defined");
            return redirect()->back();
        }
        $userType->type = $request->type;
        $userType->save();
        Session()->flash('Success', "Updated Successfully");

        return redirect()->route('admin.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        User::find($id)->delete();
        Profile::find($id)->delete();
        Session()->flash('Success', "Deleted Successfully");
        return redirect()->back();
    }
}
