<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Client;
use App\ClientDetail;
use DateTime;

class ClientAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $clients = Client::all();
        return view('appdev.clientaccount')->with("clients",$clients);
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
        $added_clients = $request->all();
        
        $details = array();
        $i = 0;
        foreach ($added_clients['address'] as $added_client){
            $details [0][$i] =  $added_client;
            $i = $i+1;
        }
        $i = 0;
        foreach ($added_clients['contactperson'] as $added_client){
            $details [1][$i] =  $added_client;
            $i = $i+1;
        }
        $i = 0;
        foreach ($added_clients['contactnumber'] as $added_client){
            $details [2][$i] =  $added_client;
            $i = $i+1;
        }
        foreach ($added_clients['compname'] as $added_client)
        {
            $clientdetails[0] = $added_client;
        }
        foreach ($added_clients['compemail'] as $added_client)
        {
            $clientdetails[1] = $added_client;
        }

        $date = new datetime();

        $client = new Client();
        $client->cl_name = $clientdetails[0];
        $client->cl_email = $clientdetails[1];
        $client->cl_status = "Active";
        $client->created_at = $date->getTimestamp();
        $client->updated_at = $date->getTimestamp();
        $client->save();

        $i=0;
        for ($row = 0; $row<sizeof($details[0]); $row++)
        {
                $clientdetail = new ClientDetail();
                $clientdetail->cl_id = $client->id;
                $clientdetail->cl_address = $details[0][$i];
                $clientdetail->cl_contactperson = $details[1][$i];
                $clientdetail->cl_contactnumber = $details[2][$i];
                $clientdetail->created_at = $date->gettimestamp();
                $clientdetail->updated_at = $date->getTimestamp();
                $clientdetail->save();

                $i = $i + 1;
        }


        Session::flash('success','Successfully added a client account!');
        return redirect("/clientaccount");
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
    }
}
