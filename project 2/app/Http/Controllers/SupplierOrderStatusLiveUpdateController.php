<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupplierOrder;
class SupplierOrderStatusLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $order = SupplierOrder::where('id', $request->id)->first();
        $order->spod_expected = $request->expectedDate;
        $order->save();
        return response()->json([
            'expdate'=>$order->spod_expected,
        ]);
    }
}
