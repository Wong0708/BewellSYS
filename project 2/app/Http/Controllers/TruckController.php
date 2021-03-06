<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Product;
use App\ProductLogs;
use App\ProductDetails;
use App\Truck;
use App\SupplyLogs;
// use App\SecondaryUser;
use DateTime;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('appdev.productinventory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $fields = $request->all();
        $truck = new Truck();
        $date = new DateTime();
        $avail = "Available";

        $truck->car_model = $fields['car_model'];
        $truck->plate_num = $fields['plate_num'];
        $truck->max_box = $fields['max_box'];
        $truck->availability = $fields['availability'];
        $truck->tr_status = $avail;
        $truck->created_at = $date->getTimestamp();
        $truck->updated_at = $date->getTimestamp();
        $truck->save();
        Session::flash('success','Successfully added a truck!');
        return redirect("/schedule");
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
    public function update(Request $request)
    {
        //
        $date = new datetime();
        //
        $truck = Truck::find($request->tr_id);
        $truck->tr_status = $request->input('truckStatus');
        $truck->updated_at = $date->getTimeStamp();
        $truck->save();

        // dd($order);

        Session::flash('success','Successfully updated the truck status!');
        return redirect("/schedule");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Truck::find($id);
        $product->delete();

        // dd($product);

        Session::flash('success','Successfully deleted a truck!');
        return redirect("/schedule");
    }
}
