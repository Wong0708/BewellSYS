<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\ScheduleDetail;

//Orders Here
use App\ClientOrder;
use App\ClientOrderDetail;
use App\ManufacturerOrder;
use App\ManufacturerDetail;

//Utilities Here
use App\Truck;
use App\Driver;


class ScheduleController extends Controller
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
        $client_orders = ClientOrder::where('clod_pstatus','=','Complete')
                                        ->where('clod_completed','=',null)
                                        ->get();
        $manufacturer_orders = ManufacturerOrder::where('mnod_status','=','Processing')
                                                    ->where('mnod_completed','=',null)
                                                    ->get();
        $client_schedules = Schedule::where('schedType','=','Client')->get();
        $manufacturer_schedules = Schedule::where('schedType','=','Manufacturer')->get();
        $scheduleDetails = ScheduleDetail::all();
        $trucks = Truck::all();
        $drivers = Driver::all();

        return view("appdev.schedule")
            ->with("client_orders",$client_orders)
            ->with("manufacturer_orders",$manufacturer_orders)
            ->with("client_schedules",$client_schedules)
            ->with("manufacturer_schedules",$manufacturer_schedules)
            ->with("trucks",$trucks)
            ->with("drivers",$drivers)
            ->with("scheduleDetails",$scheduleDetails);
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
        $order =  Schedule::where('id','=',$id)->first();
        return view("appdev.supplierorderdetail")
                ->with('order',$order);
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
        $order = SupplierOrder::where('id', $id)->delete();
        return response()->json($order);
    }

    public static function getSchedClassColor($id){
        $schedule = Schedule::find($id);
        switch ($schedule->scd_status){
            case "Processing":
                return "label-default";
                break;
            case "Scheduled":
                return "label-info";
                break;
            case "Delivered";
                return "label-success";
                break;
            case "Cancelled";
                return "label-danger";
                break;
        }
        return null;
    }
}
