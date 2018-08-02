<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrder;

class ClientOrderStatusLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $order = ClientOrder::where('id', $request->id)->first();
        $order->expectedDate = $request->expectedDate;
        $order->save();
        return response()->json([
            'expdate'=>$order->expectedDate,
        ]);
    }
}
