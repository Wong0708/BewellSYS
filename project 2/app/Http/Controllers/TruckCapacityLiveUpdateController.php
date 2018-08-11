<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truck;
use App\Schedule;
use App\ScheduleDetail;


class TruckCapacityLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
        $truck = Truck::where('plate_num','=',$request->truckPlateNumber)->first();
        $schedules = Schedule::where('scd_date','=',$request->deliveryDate)
                                ->where('truckID','=',$truck->id)
                                ->get();
        $truckCapacity = $truck->max_box;
        $totalDelivery = 0; 
        foreach($schedules as $schedule){
            foreach($schedule->fromScheduleDetail as $scheduleInfo){
                $totalDelivery = $totalDelivery+$scheduleInfo->delivered_qty;
            }
        }

        $totalNetCapacity = $truckCapacity-$totalDelivery;
        return response()->json([
            'available'=>$totalNetCapacity,
            'total'=>$truckCapacity,
            'current'=>$totalDelivery,
        ]);
    }
}
