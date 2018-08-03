<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\ScheduleDetail;
use App\ClientOrder;
use App\ClientOrderDetail;
use App\ClientLocation;
use App\Client;
use App\Truck;
use App\Driver;
use DateTime;

class ScheduleAddClientOrderLiveUpdateController extends Controller
{
    public function liveupdate(Request $request)
    {
        $json_orders = [];
        $date = new DateTime();
        $new_order = new Schedule();
        $new_order->scd_date = $request->deliveryDate;
        $new_order->scd_status = "Scheduled";
        $new_order->created_at = $date->getTimestamp();
        $new_order->updated_at = $date->getTimestamp();
        $new_order->orderID = $request->orderID;
        $new_order->truckID = $request->truckID;
        $new_order->driverID = $request->driverID;
        $new_order->locationID = $request->locationID;
        $new_order->remark = 'N/A';
        $new_order->dateDelivered = null;
        $new_order->schedType = "Client";
        $new_order->contactPerson = $request->contactPerson;
        $new_order->save();

        foreach($request->orders as $order){
            $new_order_detail = new ScheduleDetail();
            $new_order_detail->productID= $order[1];
            $new_order_detail->delivered_qty=$order[0];
            $new_order_detail->scheduleID=$new_order->id;
            $new_order_detail->created_at = $date->getTimestamp();
            $new_order_detail->updated_at = $date->getTimestamp();
            $new_order_detail->save();
        }

   
      
    }


   
}
