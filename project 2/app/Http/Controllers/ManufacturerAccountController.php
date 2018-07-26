<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Manufacturer;

use DateTime;

class ManufacturerAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('appdev.manufactureraccount')->with("manufacturers",$manufacturers);
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

        $added_manufacturers = $request->all();

        foreach($added_manufacturers['manufname'] as $added_manufacturer)
        {
            $manufacturerdetails[0] = $added_manufacturer;
        }
        foreach($added_manufacturers['manufaddress'] as $added_manufacturer)
        {
            $manufacturerdetails[1] = $added_manufacturer;
        }
        foreach($added_manufacturers['contactperson'] as $added_manufacturer)
        {
            $manufacturerdetails[2] = $added_manufacturer;
        }
        foreach($added_manufacturers['contactnumber'] as $added_manufacturer)
        {
            $manufacturerdetails[3] = $added_manufacturer;
        }
        foreach($added_manufacturers['manufemail'] as $added_manufacturer)
        {
            $manufacturerdetails[4] = $added_manufacturer;
        }


        $date = new DateTime();

        $addtomanuf = new Manufacturer();
        $addtomanuf->mn_name = $manufacturerdetails[0];
        $addtomanuf->mn_address = $manufacturerdetails[1];
        $addtomanuf->mn_contactperson = $manufacturerdetails[2];
        $addtomanuf->mn_contactnumber = $manufacturerdetails[3];
        $addtomanuf->mn_email = $manufacturerdetails[4];
        $addtomanuf->mn_status = "Active";
        $addtomanuf->created_at = $date->getTimestamp();
        $addtomanuf->updated_at = $date->getTimestamp();
        $addtomanuf->save();

        Session::flash('success', 'Successfully added a manufacturer profile!');
        return redirect('/manufactureraccount');

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
        $date = new datetime();
        //
        $manufacturers = Manufacturer::find($request->mn_id);
        $manufacturers->mn_status = $request->input('manufacturerStatus');
        $manufacturers->updated_at = $date->getTimeStamp();
        $manufacturers->save();

        // dd($order);

        Session::flash('success','Successfully updated the manufacturer status!');
        return redirect("/manufactureraccount");
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
        $product = Manufacturer::find($id);
        $product->delete();

        // dd($product);

        Session::flash('success','Successfully deleted a manufacturer profile!');
        return redirect("/manufactureraccount");
    }
}
