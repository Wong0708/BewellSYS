<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Manufacturer;
use App\ManufacturerOrder;
use App\ManufacturerOrderDetail;
use Session;
use Illuminate\Support\Facades\DB;
use DateTime;

class ManufacturerReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = Manufacturer::all();
        $orders = ManufacturerOrder::all();
        $orderdetails = ManufacturerOrderDetail::all();

        return view("appdev.manufacturerreport")
        ->with("manufacturers",$manufacturers)
        ->with("orders",$orders)
        ->with("orderdetails",$orderdetails)
        ->with("start","")
        ->with("end","");
    }
    public function generateReport(Request $request)
    {
        $manufacturers = Manufacturer::all();
        $orders = ManufacturerOrder::all();
        $orderdetails = ManufacturerOrderDetail::all();
        
        $start = new DateTime($request->start." 00:00:00");
        $end = new DateTime($request->end." 23:59:59");

        $ords = $orders;
        
        $orders = array();
        foreach($ords as $ord){
            if(new DateTime($ord['mnod_date']) >= $start && new DateTime($ord['mnod_date']) <= $end){
                array_push($orders,$ord);
            }
        }
        /*
        $orders = $orders->filter(function ($order) use($start)  {
            return $order->clod_date >= $start;
        });

        $orders = $orders->filter(function ($order) use($end) {
            return $order->clod_date < $end;
        });
        */
        return view("appdev.manufacturerreport")
        ->with("manufacturers",$manufacturers)
        ->with("orders",$orders)
        ->with("orderdetails",$orderdetails)
        ->with("start",$request->start)
        ->with("end",$request->end);
    }

    public static function getManufacturer($id){
        $manufacturer = Manufacturer::where('id', $id)->first();
        return $manufacturer;
    }

    public static function getManufacturerOrder($id){
        $order = ManufacturerOrderDetail::where('orderID',$id)->first();
        return $order;
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
