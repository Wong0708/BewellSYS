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
        return view("appdev.deliveryreport")->with("start","N/A")
            ->with("end","N/A")
            ->with("filter")
            ->with("schedules",$schedules);
    }
    public static function checkOverdue($id){
        $schedule = Schedule::find($id);

        if($schedule->scd_status){
            $datetime1 = new DateTime($schedule->scd_date);
            $datetime2 = new DateTime("now");
            $interval = $datetime2->diff($datetime1);
            $schedule['datediff'] = $interval->format('%r%a');

            $val = intval($schedule['datediff']);
            if($val<0){
                return true;
            }
        }
        return false;
    }
    public function generateReport(Request $request)
    {
        $schedules = Schedule::all();

        $start = new DateTime($request->start." 00:00:00");
        $end = new DateTime($request->end." 23:59:59");

        $filter = $request->filter;
        $fltr = null;

        switch($filter){
            case 'no_filter':
                $fltr = "General";
                break;
            case 'scheduled':
                $fltr = "Scheduled";
                $schedules = $schedules->filter(function ($sched) use ($fltr) {
                    return $sched->scd_status == $fltr;
                });
                break;
            case 'delivered':
                $fltr = "Delivered";
                $schedules = $schedules->filter(function ($sched) use ($fltr) {
                    return $sched->scd_status == $fltr;
                });
                break;
            case 'cancelled':
                $fltr= "Cancelled";
                $schedules = $schedules->filter(function ($sched) use ($fltr) {
                    return $sched->scd_status == $fltr;
                });
                break;
        }

        $scheds = array();
        foreach($schedules as $ord){
            if(new DateTime($ord['scd_date']) >= $start && new DateTime($ord['scd_date']) <= $end){
                array_push($scheds,$ord);
            }

        }
        foreach($scheds as $schedule){
            $date = date_create($schedule['scd_date']);
            $schedule['scd_date'] = date_format($date, "F j Y");
            if($schedule->dateDelivered){
                $date = date_create($schedule['dateDelivered']);
                $schedule['dateDelivered'] = date_format($date, "F j Y");
            }
        }

        return view("appdev.deliveryreport")
            ->with("start",$request->start)
            ->with("end",$request->end)
            ->with("schedules",$scheds)
            ->with("filter",$fltr);
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
