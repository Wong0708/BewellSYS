<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManufacturerOrder;
use App\ManufacturerOrderDetail;
use App\Supply;
use App\Schedule;
use App\ScheduleManufacturerDetail;

class ScheduleFulfill2DeliveryLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $schedule = Schedule::where('id','=',$request->scheduleID)->first();
        $schedule->scd_status = "Delivered";
        $schedule->dateDelivered = date('Y-m-d');
        $schedule->remark = $request->remarks;
        $schedule->save();

        $scheduleDetail = ScheduleManufacturerDetail::where('scheduleID','=',$schedule->id)->get();
        
        foreach($scheduleDetail as $info){
            $product = Supply::where('id','=',$info->supplyID)->first();
            $product->sp_qty = $product->sp_qty - $info->delivered_qty;
            $product->save();
            $client_detail = ManufacturerOrderDetail::where('orderID','=',$schedule->orderID)
                                                ->where('supplyID','=',$product->id)
                                                ->first();
            $client_detail->received2=$client_detail->received2+$info->delivered_qty;
            $client_detail->save();

        }

        $var = false;
        $client_details = ManufacturerOrderDetail::where('orderID','=',$schedule->orderID)->get();
        foreach($client_details as $detail){
            if($detail->cldt_qty-$detail->received==0 ){
                $var =true;
            }
        }                     
        
        if($var==true){
            $clientorder =ManufacturerOrder::where('id','=',$client_detail->orderID)->first();
            $clientorder->mnod_status="Delivered";
            $clientorder->mnod_completed=date('Y-m-d');
            $clientorder->save();
        }

        return response()->json();


        
    }
}
