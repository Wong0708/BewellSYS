<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManufacturerOrder;

class ManufacturerOrderStatusLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $order = ManufacturerOrder::where('id', $request->id)->first();
        $order->mnod_expected = $request->expectedDate;
        $order->save();
        return response()->json([
            'expdate'=>$order->mnod_expected,
        ]);
    }
}
