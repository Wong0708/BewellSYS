<?php

namespace App\Http\Controllers;


 use App\Product;
 use App\ScheduleManufacturerDetail;
 use Illuminate\Http\Request;


 use App\Http\Requests;

 use App\Http\Controllers\Controller;

 use Illuminate\Support\Facades\DB;
 use App\Schedule;
 use App\ScheduleDetail;

 use App\driver;
 use DateTime;

class ScheduleDetailController extends Controller
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

    public function index($id)
    {


    }
    public function getSchedule($id){

        $schedule = Schedule::find($id);
        if($schedule['id'] == null){
            return view('errors.404');
        }

        if($schedule['schedType'] == "client"){
            $schedule_dets = ScheduleDetail::all();
            $date = date_create($schedule->scd_date);
            $schedule->scd_date = date_format($date, "F j Y");

            if($schedule->scd_status == "Cancelled"){
                $schedule['datediff'] = "<p class='text-muted'>Delivery is cancelled</p>";
            }
            else if($schedule->dateDelivered){
                $date = date_create($schedule['dateDelivered']);
                $schedule['dateDelivered'] = date_format($date, "F j Y");
            }
            else{
                if($schedule->scd_status){
                    $datetime1 = new DateTime($schedule->scd_date);
                    $datetime2 = new DateTime("now");
                    $interval = $datetime1->diff($datetime2);
                    $schedule['datediff'] = $interval->format('in %a days');

                    if($schedule['datediff'] == "in 0 days" ){
                        $schedule['datediff'] = "<b style='color: forestgreen'>TODAY</b>";
                    }
                }
            }
            $schedule_dets = $schedule_dets->filter(function ($schedule_dets) use ($id) {
                return $schedule_dets->scheduleID == $id;
            });
        }
        else{
            $schedule_dets = ScheduleManufacturerDetail::all();
            $date = date_create($schedule->scd_date);
            $schedule->scd_date = date_format($date, "F j Y");

            if($schedule->scd_status == "Cancelled"){
                $schedule['datediff'] = "<p class='text-muted'>Delivery is cancelled</p>";
            }
            else if($schedule->dateDelivered){
                $date = date_create($schedule['dateDelivered']);
                $schedule['dateDelivered'] = date_format($date, "F j Y");
            }
            else{
                if($schedule->scd_status){
                    $datetime1 = new DateTime($schedule->scd_date);
                    $datetime2 = new DateTime("now");
                    $interval = $datetime1->diff($datetime2);
                    $schedule['datediff'] = $interval->format('in %a days');

                    if($schedule['datediff'] == "in 0 days" ){
                        $schedule['datediff'] = "<b style='color: forestgreen'>TODAY</b>";
                    }
                }
            }
            $schedule_dets = $schedule_dets->filter(function ($schedule_dets) use ($id) {
                return $schedule_dets->scheduleID == $id;
            });

        }

        return  view("appdev.scheduledetail",['schedule' => $schedule])->with("schedule_dets",$schedule_dets);
    }
    public static function getProduct($id){
        $prod = Product::where('id', $id)->first();
        return $prod;
    }


    /**
     * Show the form for creating a new resourc.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public static function getSchedClassColor($id){
        $schedule = Schedule::find($id);
        switch ($schedule->scd_status){
            case "Processing":
                return "gray";
                break;
            case "Scheduled":
                return "blue";
                break;
            case "Delivered";
                return "green";
                break;
            case "Cancelled";
                return "red";
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
