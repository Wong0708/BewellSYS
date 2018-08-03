<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupplierOrder;

class SupplierOrderCompleteLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
       $order = SupplierOrder::where('id','=',$request->id)->first();
       $order->spod_status = 'Complete';
       $order->spod_completed = date('Y-m-d');
       $order->save();
       return response()->json([
           'status'=>$order->spod_status,
           'completed'=>$order->spod_completed,
       ]);
    }
}
