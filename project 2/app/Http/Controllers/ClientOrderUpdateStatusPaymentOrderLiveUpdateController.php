<?php

namespace App\Http\Controllers;

use App\ClientOrder;
use Illuminate\Http\Request;

class ClientOrderUpdateStatusPaymentOrderLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
       $order = CLientOrder::where('id','=',$request->id);
       $order->clod_pstatus = 'Complete';
       $order->save();
       return response()->json();
    }
}
