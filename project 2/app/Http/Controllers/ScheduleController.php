<?php

namespace App\Http\Controllers;

use App\ClientOrderDetail;
use App\Schedule;
use App\ScheduleDetail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Session;
use App\Product;
use App\Truck;

use App\Client;

use App\ClientOrder;
use App\ClientLocation;
use App\ProductLogs;
use App\ProductDetails;
use App\Supply;
use App\SupplyLogs;
use App\driver;
// use App\SecondaryUser;
use DateTime;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks = Truck::all();
        $drivers = driver::all();
        $orders = ClientOrder::all();
        $locations = ClientLocation::all();
        $clients = Client::all();



        $orders = $orders->filter(function ($order) {
            $order_det = ClientOrderDetail::all();
            $order_det_id = array();

            foreach ($order_det as $det){

                array_push($order_det_id,$det['orderID']);
            }

            return in_array($order->id,$order_det_id,TRUE);
        });
        $orders = $orders->filter(function ($order) {
            return $order->clod_status == "Processing";
        });




        foreach($orders as $order){
            $order['locations']= array();
            $order['locations']= DB::table('bc_client_location')->where('id', $order['clientID'])->get()->toArray();
            $order['order_details']=DB::table("bc_client_order_detail")->where('orderID', $order['id'])->get()->toArray();
            $a = DB::table('bc_client')->select('bc_client.cl_name')->where('id', $order['clientID'])->first();
            $order['client_name'] = $a->cl_name;
        }
        // get order and get the client from that order
        // display their list of addresses
        return view('appdev.schedule',['trucks' => $trucks],['drivers' => $drivers],['clients'=>$clients])->with("orders",$orders);
       
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addtruck(Request $request)
    {
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fields = $request->all();

        $schedule = new Schedule();
        $date = new DateTime();

        $schedule->scd_date = $fields['date'];
        $schedule->scd_status = "Scheduled";
        $schedule->orderID = $fields['order_num'];
        $schedule->truckID = $fields['plate_num'];
        $schedule->driverID = $fields['driver'];
        $schedule->locationID = $fields['address'];

        $schedule->created_at = $date->getTimestamp();
        $schedule->updated_at = $date->getTimestamp();

        $schedule->save();
        $i = 0;
        $insertID = DB::getPdo()->lastInsertId();
        foreach ($fields['ids'] as $id){

            $schedule_det = new ScheduleDetail();
            $schedule_det->productID = $id;
            $schedule_det->delivered_qty = $fields['orderqty'][$i];
            $schedule_det->scheduleID = $insertID;

            $schedule_det->created_at = $date->getTimestamp();
            $schedule_det->updated_at = $date->getTimestamp();
            $i = $i+1;
        }
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
