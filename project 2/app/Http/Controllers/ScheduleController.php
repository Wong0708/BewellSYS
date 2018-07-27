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
        $trucc = Truck::all();
        $drivers = driver::all();
        $orders = ClientOrder::all();
        $locations = ClientLocation::all();
        $clients = Client::all();

        $latest = Schedule::all();
        $latest_id = Schedule::all()->last();
        $latest_id = $latest_id['id'];
        $schedules = Schedule::all();

        $orders = $orders->filter(function ($order) {
            $order_det = ClientOrderDetail::all();
            $order_det_id = array();

            foreach ($order_det as $det){
                array_push($order_det_id, $det['orderID']);
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

            $a = Client::find($order['clientID']);

            $order['client_name'] = $a['cl_name'];
        }

        foreach($schedules as $schedule){

            $date = date_create($schedule['scd_date']);
            $schedule['scd_date'] = date_format($date, "F j Y");
        }
        return view('appdev.schedule',['trucks' => $trucks],['drivers' => $drivers],['clients'=>$clients])->with("latest_id",$latest_id)->with("orders",$orders)->with("schedules",$schedules)->with("trucc",$trucc);
       
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
    public function getCurCapacity($truckID, $date){
        $total_curr_cap = 0;
        $schedules = Schedule::all();
        $tid = $truckID;
        $date = $date." 00:00:00";

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
        return $total_curr_cap;
    }
    /**
     * return Response::json(array(
    'success' => $total_curr_cap,
    'msg' => "gago",
    'total_curr_cap' => $total_curr_cap,
    ));
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
        // change status of order to processed.
        $schedule->scd_date = $fields['delivery_date'];
        $schedule->scd_status = "Scheduled";
        $schedule->orderID = $fields['order_num'];
        $schedule->truckID = $fields['plate_num'];
        $schedule->driverID = $fields['driver'];
        $schedule->locationID = $fields['address'];

        $schedule->created_at = $date->getTimestamp();
        $schedule->updated_at = $date->getTimestamp();


        $order = ClientOrder::find($fields['order_num']);
        $order->clod_status = "Scheduled";
        $order->save();

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

        $fields = $request->all();
        $schedule = Schedule::find($fields['id']);
        if($request->schedule_conclusion == "fulfil"){

            $schedule->dateDelivered = $request->delivery_date;
            $schedule->scd_status = "Delivered";
            $schedule->remark = $request->remarks;
        }
        else{
            $schedule->scd_status = "Cancelled";
            $schedule->remark = $request->remarks;
        }

        $schedule->save();

        Session::flash('success','Successfully confirmed schedule!');
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
