<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;
use DateTime;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        if($users->id = 1)
        {
            $userdept = "Logistics Head";
        }
        else
            $userdept = "Logistics Department";

        return view('appdev.useraccount')->with("users",$users)->with("userdept",$userdept);
        
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
        //
        $added_users = $request->all();

        foreach ($added_users['name'] as $added_user)
        {
            $added_users[0] = $added_user;
        }
        foreach($added_users['username'] as $added_user)
        {
            $userdetail[1] = $added_user;
        }
        foreach($added_users['password'] as $added_user)
        {
            $userdetail[2] = Hash::make($added_user);
        }
        foreach($added_users['email'] as $added_user)
        {
            $userdetail[3] = $added_user;
        }
        foreach($added_users['contact'] as $added_user)
        {
            $userdetail[4] = $added_user;
        }


        foreach($added_users['department'] as $added_user)
        {
            $userdetail[5] = $added_user['department'];
        }
        foreach($added_users['role'] as $added_user)
        {
            $userdetail[6] = $added_user;
        }
        foreach($added_users['access'] as $added_user)
        {
            $userdetail[7] = $added_user;
        }

        $date = new DateTime();

        $usercreate = new User();
        $usercreate->name = $userdetail[1];
        $usercreate->email = $userdetail[3];
        $usercreate->contact = $userdetail[4];
        $usercreate->password = $userdetail[2];
        $usercreate->role = $userdetail[6];
        $usercreate->accesscontrol = $userdetail[7];
        $usercreate->created_at = $date->gettimestamp();
        $usercreate->updated_at = $date->gettimestamp();
        $usercreate->user_id = $userdetail[5];
        $usercreate->save();

        Session::flash('success','Successfully added a user!');
        return redirect("/useraccount");
        
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
        $product = User::find($id);
        $product->delete();

        // dd($product);

        Session::flash('success','Successfully deleted a user!');
        return redirect("/useraccount");
    }
}
