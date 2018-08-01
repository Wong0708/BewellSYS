<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Controllers\Controller;
use App\Supplier;
use App\SupplierOrder;
use App\SupplierOrderDetail;
use App\Supply;
use DateTime;

class SupplierReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        $orders = SupplierOrder::all();
        $orderdetails = SupplierOrderDetail::all();
        $supplies = Supply::all();

        return view("appdev.supplierreport")->with("start","")
        ->with("end","")->with("orders",$orders)
        ->with("suppliers",$suppliers)
        ->with("supplies",$supplies)
        ->with("orderdetails",$orderdetails);
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
