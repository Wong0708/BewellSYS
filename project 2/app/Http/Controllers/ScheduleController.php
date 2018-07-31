<?php

namespace App\Http\Controllers;

use App\ClientOrderDetail;
use App\Manufacturer;
use App\ManufacturerOrder;
use App\ManufacturerOrderDetail;
use App\Schedule;
use App\ScheduleDetail;
use App\ScheduleManufacturerDetail;
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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $trucks = Truck::all();
        $drivers = driver::all();

        $client_orders = ClientOrder::all();
        $client_schedules = Schedule::all();

        $manufacturer_orders = ManufacturerOrder::all();
        $manufacturer_schedules = Schedule::all();


        $latest_id = Schedule::all()->last();
        $latest_id = $latest_id['id'];

        $client_schedules = $client_schedules->filter(function ($order) {
            return $order->schedType == "client";
        });

        $manufacturer_schedules = $manufacturer_schedules->filter(function ($order) {
            return $order->schedType == "manufacturer";
        });

        $manufacturer_orders = $manufacturer_orders->filter(function ($manufacturer_order) {
            $order_det = ManufacturerOrderDetail::all();
            $order_det_id = array();

            foreach ($order_det as $det){
                array_push($order_det_id, $det['orderID']);
            }

            return in_array($manufacturer_order->id,$order_det_id,TRUE);
        });
        $client_orders = $client_orders->filter(function ($client_order) {
            $order_det = ClientOrderDetail::all();
            $order_det_id = array();

            foreach ($order_det as $det){
                array_push($order_det_id,$det['orderID']);
            }
            return in_array($client_order->id,$order_det_id,TRUE);
        });

        $client_orders = $client_orders->filter(function ($order) {
            return $order->clod_status == "Processing" || $order->clod_status == "Cancelled";
        });

        $manufacturer_orders = $manufacturer_orders->filter(function ($order) {
            return $order->mnod_status == "Processing" || $order->clod_status == "Cancelled";
        });

        foreach($manufacturer_orders as $manufacturer_order){

            $manufacturer_order['locations']= array();
            $manufacturer_order['locations']= DB::table('bc_manufacturer_location')->where('companyID', $manufacturer_order['manufacturerID'])->get()->toArray();
            $manufacturer_order['order_details']=DB::table("bc_manufacturer_order_detail")->where('orderID', $manufacturer_order['id'])->get()->toArray();

            $a = Manufacturer::find($manufacturer_order['manufacturerID']);
            $manufacturer_order['manufacturer_name'] = $a['mn_name'];
        }

        foreach($client_orders as $client_order){

            $client_order['locations']= array();
            $client_order['locations']= DB::table('bc_client_location')->where('companyID', $client_order['clientID'])->get()->toArray();
            $client_order['order_details']=DB::table("bc_client_order_detail")->where('orderID', $client_order['id'])->get()->toArray();

            $a = Client::find($client_order['clientID']);
            $client_order['client_name'] = $a['cl_name'];
        }

        foreach($client_schedules as $client_schedule){
            $date = date_create($client_schedule['scd_date']);
            $client_schedule['scd_date'] = date_format($date, "F j Y");
            if($client_schedule->dateDelivered){
                $date = date_create($client_schedule['dateDelivered']);
                $client_schedule['dateDelivered'] = date_format($date, "F j Y");
            }
        }
        foreach($manufacturer_schedules as $manufacturer_schedule){
            $date = date_create($manufacturer_schedule['scd_date']);
            $manufacturer_schedule['scd_date'] = date_format($date, "F j Y");
            if($manufacturer_schedule->dateDelivered){
                $date = date_create($manufacturer_schedule['dateDelivered']);
                $manufacturer_schedule['dateDelivered'] = date_format($date, "F j Y");
            }
        }
        return view('appdev.schedule',['trucks' => $trucks],['drivers' => $drivers])
            ->with("latest_id",$latest_id)
            ->with("manufacturer_orders",$manufacturer_orders)
            ->with("manufacturer_schedules",$manufacturer_schedules)
            ->with("client_orders",$client_orders)
            ->with("client_schedules",$client_schedules);
    }
    public function getCurrCapacity(Request $request){
        $total_curr_cap = 0;
        $schedules = Schedule::all();
        $tid = $request->truckID;
        $date = $request->date." 00:00:00";

        $schedules = $schedules->filter(function ($sched) use ($tid) {
            return $sched->truckID == $tid;
        });
        $schedules = $schedules->filter(function ($sched) use ($date) {
            return $sched->scd_date == $date;
        });


        foreach ($schedules as $schedule){
            $schedule_dets = ScheduleDetail::all();
            $sid = $schedule['id'];

            $schedule_dets = $schedule_dets->filter(function ($sched) use ($sid) {
                return $sched->scheduleID == $sid;
            });

            foreach ($schedule_dets as $schedule_det){
                $total_curr_cap += $schedule_det['delivered_qty'];
            }

        }
        return response()->json(['success'=>'zuccess','total_curr_cap'=>$total_curr_cap,'msg'=>"shadow"]);
    }
    public static function getCurCapacity($id){
        $total_curr_cap = 0;
        $schedule_dets = ScheduleDetail::all();
        $sid = $id;
        $schedule_dets = $schedule_dets->filter(function ($sched) use ($sid) {
            return $sched->scheduleID == $sid;
        });
        foreach ($schedule_dets as $schedule_det){
            $total_curr_cap += $schedule_det['delivered_qty'];
        }
        return $total_curr_cap;
    }

    public static function getRestrictClient($status,$id){

        switch ($status){
            case "Processing":
                $a='<a href="#" data-toggle="modal" 
                                data-target="#concludeSchedModal"
                                scid="'.$id.'" sctype="client" class="conclude" >
                    <i style=" font-size: 20px; color:#011fe5;" class="fa fa-book"></i></a>';
                return $a;
                break;
            case "Scheduled":
                $a='<a href="#" data-toggle="modal" 
                                data-target="#concludeSchedModal"
                                scid="'.$id.'" sctype="client" class="conclude" >
                    <i style=" font-size: 20px; color:#011fe5;" class="fa fa-book"></i></a>';
                return $a;
                break;
            case "Delivered";
                return null;
                break;
            case "Cancelled";
                return null;
                break;
        }
        return null;
    }
    public static function getRestrictManufacturer($status,$id){

        switch ($status){
            case "Processing":
                $a='<a href="#" data-toggle="modal" 
                                data-target="#concludeSchedModal"
                                scid="'.$id.'" sctype="manufacturer" class="conclude" >
                    <i style=" font-size: 20px; color:#011fe5;" class="fa fa-book"></i></a>';
                return $a;
                break;
            case "Scheduled":
                $a='<a href="#" data-toggle="modal" 
                                data-target="#concludeSchedModal"
                                scid="'.$id.'" sctype="manufacturer" class="conclude" >
                    <i style=" font-size: 20px; color:#011fe5;" class="fa fa-book"></i></a>';
                return $a;
                break;
            case "Delivered";
                return null;
                break;
            case "Cancelled";
                return null;
                break;
        }
        return null;
    }
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

    public function getSchedule($id){

        $schedule = Schedule::find($id);
        if($schedule['id'] == null){
            return view('errors.404');
        }
        $schedule_dets = DB::table('bc_schedule_detail')->join('bc_schedule','bc_schedule_detail.orderID','=','bc_schedule.id')->get()->toArray();

        return  view("appdev.scheduledetail",['schedule' => $schedule])->with("schedule_dets",$schedule_dets);
    }
    public static function getTruck($id){
        return Truck::find($id);
    }

    public static function getDriver($id){
        return Driver::find($id);
    }
    public static function getLocation($id){
        return ClientLocation::find($id);
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
    /**
     * Store a newly creat resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fields = $request->all();

        $schedule = new Schedule();
        $date = new DateTime();

        $schedule->scd_date = $fields['delivery_date']." 00:00:00";
        $schedule->scd_status = "Scheduled";
        $schedule->orderID = $fields['order_num'];
        $schedule->truckID = $fields['plate_num'];
        $schedule->driverID = $fields['driver'];
        $schedule->locationID = $fields['address'];
        $schedule->created_at = $date->getTimestamp();
        $schedule->updated_at = $date->getTimestamp();
        $schedule->schedType = $request->sched_type;
        $type = $request->sched_type;
        if($type == "manufacturer"){

            $manufacturer_order = ManufacturerOrder::find($fields['order_num']);
            $manufacturer_order->mnod_status = "Scheduled";
            $manufacturer_order->save();

            $schedule->save();

            $i = 0;
            $insertID =$schedule->id;
            foreach ($fields['ids'] as $id){

                $schedule_det = new ScheduleManufacturerDetail();
                $schedule_det->supplyID = $id;
                $schedule_det->delivered_qty = $fields['orderqty'][$i];
                $schedule_det->scheduleID = $insertID;

                $schedule_det->created_at = $date->getTimestamp();
                $schedule_det->updated_at = $date->getTimestamp();

                $schedule_det->save();
                $i = $i+1;
            }

        }
        else{
            $client_order = ClientOrder::find($fields['order_num']);
            $client_order->clod_status = "Scheduled";
            $client_order->save();

            $schedule->save();

            $i = 0;
            $insertID =$schedule->id;
            foreach ($fields['ids'] as $id){

                $schedule_det = new ScheduleDetail();
                $schedule_det->productID = $id;
                $schedule_det->delivered_qty = $fields['orderqty'][$i];
                $schedule_det->scheduleID = $insertID;

                $schedule_det->created_at = $date->getTimestamp();
                $schedule_det->updated_at = $date->getTimestamp();

                $schedule_det->save();
                $i = $i+1;
            }

        }


        Session::flash('success','New schedule added!');
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
    public function update(Request $request, $id)
    {
        $MSG = 'Successfully confirmed schedule!';
        $fields = $request->all();
        $type = $request->sc_type;
        if($type == "client"){
            $schedule = Schedule::find($fields['id']);
            $order = ClientOrder::find($schedule['orderID']);
            if($request->schedule_conclusion == "fulfil"){

                $schedule->dateDelivered = $request->delivery_date;
                $schedule->scd_status = "Delivered";
                $schedule->remark = $request->remarks;

                $order->clod_status = "Delivered";

                $MSG = 'Successfully delivered schedule!';
            }
            else{
                $schedule->scd_status = "Cancelled";
                $schedule->remark = $request->remarks;

                $order->clod_status = "Cancelled";

                $MSG = 'Successfully cancelled schedule!';
            }
            $order->save();
        }
        else{
            $schedule = Schedule::find($fields['id']);
            $order = ManufacturerOrder::find($schedule['orderID']);
            if($request->schedule_conclusion == "fulfil"){

                $schedule->dateDelivered = $request->delivery_date;
                $schedule->scd_status = "Delivered";
                $schedule->remark = $request->remarks;

                $order->mnod_status = "Delivered";

                $MSG = 'Successfully delivered schedule!';
            }
            else{
                $schedule->scd_status = "Cancelled";
                $schedule->remark = $request->remarks;

                $order->mnod_status = "Cancelled";

                $MSG = 'Successfully cancelled schedule!';
            }
            $order->save();
        }

        $schedule->save();

        Session::flash('success',$MSG);
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
        //
        $schedule = Schedule::find($id);
        $schedule->delete();

        // dd($product);

        Session::flash('success','Successfully deleted a schedule!');
        return redirect("/schedule");
    }
}
