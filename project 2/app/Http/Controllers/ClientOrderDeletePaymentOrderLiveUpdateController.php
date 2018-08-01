<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrderPayment;
class ClientOrderDeletePaymentOrderLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $product = ClientOrderPayment::destroy($request->id);
        return response()->json();
    }
}
