<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrder;
use App\ClientOrderLogs;
use DateTime;

class ClientOrderStatusLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        //Variable Initialization for Order;
        $date = new DateTime();

        //Logs for the order.
        $logs = new ClientOrderLogs();
        $logs->userID= auth()->user()->id;
        $logs->query_date=  date('Y-m-d H:i:s');
        $logs->query_type= 'Insert';
        $logs->notification= 'Expected Order Deadline has been updated to '.$request->expectedDate.'!';
        $logs->created_at= $date->getTimestamp();
        $logs->updated_at= $date->getTimestamp();
        $logs->save();

        //Order Logic Proper
        $order = new ClientOrder();
        $order = ClientOrder::where('id', $request->id)->first();
        $order->expectedDate = $request->expectedDate;
        $order->save();

        return response()->json([
            'expdate'=>$order->expectedDate,
        ]);
    }
}
