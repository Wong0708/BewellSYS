<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleRescheduleLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $schedule = Schedule::where('id','=',$request->scheduleID)->first();
        $schedule->scd_date = $request->deliveryDate;
        $schedule->scd_status = "Scheduled";
        $schedule->remark = $request->remarks;
        $schedule->save();
        return response()->json();
       
    }
}
