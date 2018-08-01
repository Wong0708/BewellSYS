<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrderPayment;
class ClientOrderUpdatePaymentOrderLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        //For Future Purposes code
        //Commented out by: John Edel B. Tamani
        //Connected with ClientOrderDetail Page/s
        
        $orderPayment = ClientOrderPayment::where('id','=',$request->id)->first();
        $orderPayment->totalAmount=$request->paymentAmount;
        $orderPayment->save();
        return response()->json();
    }
}
