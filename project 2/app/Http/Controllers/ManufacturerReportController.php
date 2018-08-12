<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Manufacturer;
use App\ManufacturerOrder;
use App\ManufacturerOrderDetail;
use App\Supply;
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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $filter_val = array(
            "Scheduled"=>0,
            "Fulfilled"=>0,
            "Cancelled"=>0,
            "Processing"=>0,
        );


        $manufacturers = Manufacturer::all();
        $orders = ManufacturerOrder::all();
        $orderdetails = ManufacturerOrderDetail::all();

        foreach($orders as $order){
            $date = date_create($order['mnod_date']);
            $order['mnod_date'] = date_format($date, "F j Y");
        }
        foreach($orders as $ord){
            switch ($ord['mnod_status']){
                case 'Scheduled':
                    $filter_val['Scheduled'] = $filter_val ['Scheduled'] +1;
                    break;
                case 'Delivered':
                    $filter_val['Fulfilled'] = $filter_val ['Fulfilled'] +1;
                    break;
                case "Cancelled":
                    $filter_val['Cancelled'] = $filter_val ['Cancelled'] +1;
                    break;

                case "Processing":
                    $filter_val['Processing'] = $filter_val ['Cancelled'] +1;
                    break;
            }
        }

        return view("appdev.manufacturerreport")
        ->with("manufacturers",$manufacturers)
        ->with("orders",$orders)
        ->with("filter_val",$filter_val)
        ->with("orderdetails",$orderdetails)
        ->with("start","")
        ->with("end","");
    }
    public function generateReport(Request $request)
    {
        $filter_val = array(
            "Scheduled"=>0,
            "Fulfilled"=>0,
            "Cancelled"=>0,
            "Processing"=>0,
        );
        $total_qty = 0;
        $total_gross = 0;
        $manufacturers = Manufacturer::all();
        $orders = ManufacturerOrder::all();
        $orderdetails = ManufacturerOrderDetail::all();

        foreach($orders as $ord){
            switch ($ord['mnod_status']){
                case 'Scheduled':
                    $filter_val['Scheduled'] = $filter_val ['Scheduled'] +1;
                    break;
                case 'Delivered':
                    $filter_val['Fulfilled'] = $filter_val ['Fulfilled'] +1;
                    break;
                case "Cancelled":
                    $filter_val['Cancelled'] = $filter_val ['Cancelled'] +1;
                    break;

                case "Processing":
                    $filter_val['Processing'] = $filter_val ['Cancelled'] +1;
                    break;
            }
        }
        foreach($orders as $order){
            $date = date_create($order['mnod_date']);
            $order['mnod_date'] = date_format($date, "F j Y");
        }
        
        $start = new DateTime($request->start." 00:00:00");
        $end = new DateTime($request->end." 23:59:59");

        $ords = $orders;
        
        $orders = array();
        foreach($ords as $ord){
            if(new DateTime($ord['mnod_date']) >= $start && new DateTime($ord['mnod_date']) <= $end){
                $clorder = self::getManufacturerOrder($ord['id']);
                $total_qty += $clorder['mndt_qty'];
                $total_gross += self::getSupply($clorder['supplyID'])['sp_price'] * $clorder['mndt_qty'];
                array_push($orders,$ord);
            }
        }
        return view("appdev.manufacturerreport")
        ->with("manufacturers",$manufacturers)
        ->with("orders",$orders)
        ->with("filter_val",$filter_val)
        ->with("total_qty",$total_qty)
        ->with("total_gross",$total_gross)
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

    public static function getSupply($id){
        $supply = Supply::where('id',$id)->first();
        return $supply;
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
        $manufacturer = Manufacturer::find($id);
        $order = ManufacturerOrder::find($id);
        $orderdetail = ManufacturerOrderDetail::find($id);

        
        $date = date_create($order['mnod_date']);
        $order['mnod_date'] = date_format($date, "F j Y");
        

        return view("appdev.manufacturerreportdetail")
        ->with("manufacturer",$manufacturer)
        ->with("order",$order)
        ->with("orderdetail",$orderdetail);
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
