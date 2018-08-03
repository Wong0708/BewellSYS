<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrder;
use App\ClientOrderDetail;
use App\Product;
use App\Schedule;
use App\ScheduleDetail;

class ScheduleFulfillDeliveryLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $schedule = Schedule::where('id','=',$request->scheduleID)->first();
        $schedule->scd_status = "Delivered";
        $schedule->dateDelivered = date('Y-m-d');
        $schedule->remark = $request->remarks;
        $schedule->save();

        $scheduleDetail = ScheduleDetail::where('scheduleID','=',$schedule->id)->get();
        
        foreach($scheduleDetail as $info){
            $product = Product::where('id','=',$info->productID)->first();
            $product->pd_qty = $product->pd_qty - $info->delivered_qty;
            $product->save();
            $client_detail = ClientOrderDetail::where('orderID','=',$schedule->orderID)
                                                ->where('productID','=',$product->id)
                                                ->first();
            $client_detail->received=$client_detail->received+$info->delivered_qty;
            $client_detail->save();

        }

        $var = false;
        $client_details = ClientOrderDetail::where('orderID','=',$schedule->orderID)->get();
        foreach($client_details as $detail){
            if($detail->cldt_qty-$detail->received==0 ){
                $var =true;
            }
        }                     
        
        if($var==true){
            $clientorder =ClientOrder::where('id','=',$client_detail->orderID)->first();
            $clientorder->clod_status="Delivered";
            $clientorder->clod_completed=date('Y-m-d');
            $clientorder->save();
        }

        return response()->json();


        
    }
}
