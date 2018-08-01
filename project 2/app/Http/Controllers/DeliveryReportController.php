<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Supplier;
use App\SupplierOrder;
use App\SupplierOrderDetail;
use App\Supply;
use DateTime;
use Illuminate\Http\Request;

class DeliveryReportController extends Controller
{

    public function index()
    {

        $schedules = Schedule::all();
        
        foreach($schedules as $schedule){
            $date = date_create($schedule['scd_date']);
            $schedule['scd_date'] = date_format($date, "F j Y");
            if($schedule->dateDelivered){
                $date = date_create($schedule['dateDelivered']);
                $schedule['dateDelivered'] = date_format($date, "F j Y");
            }
        }

        return view("appdev.deliveryreport")->with("start","")
            ->with("end","")
            ->with("schedules",$schedules);
    }

    public function generateReport(Request $request)
    {
        $suppliers = Supplier::all();
        $orders = SupplierOrder::all();
        $orderdetails = SupplierOrderDetail::all();
        $supplies = Supply::all();
        $test = $request->dog;

        $start = new DateTime($request->start." 00:00:00");
        $end = new DateTime($request->end." 23:59:59");

        $ords = $orders;

        $orders = array();
        foreach($ords as $ord){
            if(new DateTime($ord['spod_date']) >= $start && new DateTime($ord['spod_date']) <= $end){
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
        return view("appdev.supplierreport")->with("orders",$orders)->with("suppliers",$suppliers)
            ->with("start",$request->start)
            ->with("end",$request->end)
            ->with("supplies",$supplies)
            ->with("orderdetails", $orderdetails);
    }
    public static function getSupplier($id){
        $supplier = Supplier::where('id', $id)->first();
        return $supplier;
    }

    public static function getSupplierOrderDetail($id){
        $orderdetail = SupplierOrderDetail::where('orderID', $id)->first();
        return $orderdetail;
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
        $orderdetails = SupplierOrderDetail::all();
        return view('appdev.supplierreportdetail')->with("orderdetails",$orderdetails);
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
