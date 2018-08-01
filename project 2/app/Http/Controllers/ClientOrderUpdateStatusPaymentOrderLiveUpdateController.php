<?php

namespace App\Http\Controllers;

use App\ClientOrder;
use Illuminate\Http\Request;

class ClientOrderUpdateStatusPaymentOrderLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        if($request->status==1){
            $order = ClientOrder::where('id','=',$request->id)->first();
            $order->clod_pstatus = 'Pending';
            $order->save();
            return response()->json([
                'status'=>$order->clod_pstatus,
            ]);
        }
        else if($request->status==2){
            $order = ClientOrder::where('id','=',$request->id)->first();
            $order->clod_pstatus = 'Complete';
            $order->save();
            return response()->json([
                'status'=>$order->clod_pstatus,
            ]);
        }
    }
}
