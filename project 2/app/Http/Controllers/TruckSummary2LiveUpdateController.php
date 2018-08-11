<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Driver;
use App\ManufacturerLocation;

class TruckSummary2LiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
        $processed_schedules=[];
        $schedules = Schedule::where('scd_date','=',$request->deliveryDate)
                                ->where('scd_status','=','Scheduled')
                                ->get();

        foreach($schedules as $schedule){
            $driver = Driver::where('id','=',$schedule->driverID)->first();
            $location = ManufacturerLocation::where('id','=',$request->locationID)->first();
            $push = array(
               $schedule->scd_date, $driver->name,$location->loc_address,$schedule->scd_status
            );
            array_push($processed_schedules,$push);
        }
        return response()->json([
            'schedules'=>$processed_schedules,
        ]);
    }
}
