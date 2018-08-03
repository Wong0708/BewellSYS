<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\ScheduleDetail;

class ScheduleCancelDeliveryLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $schedule = Schedule::where('id','=',$request->scheduleID)->first();
        $schedule->scd_status = "Cancelled";
        $schedule->remark = $request->remarks;
        $schedule->save();
        return response()->json();
       
    }
}
