<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManufacturerOrder;
use App\ManufacturerOrderLogs;
use DateTime;

class ManufacturerOrderStatusLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        //Initialization of Variables
        $date = new DateTime();
        $logs = new ManufacturerOrderLogs();
        $logs->manufacturerID= $request->id;
        $logs->userID= auth()->user()->id;
        $logs->query_date=  date('Y-m-d H:i:s');
        $logs->query_type= 'Insert';
        $logs->notification= 'Expected Order Deadline has been updated to '.$request->expectedDate.'!';
        $logs->created_at= $date->getTimestamp();
        $logs->updated_at= $date->getTimestamp();
        $logs->save();

        $order = ManufacturerOrder::where('id', $request->id)->first();
        $order->mnod_expected = $request->expectedDate;
        $order->save();
        return response()->json([
            'expdate'=>$order->mnod_expected,
        ]);
    }
}
