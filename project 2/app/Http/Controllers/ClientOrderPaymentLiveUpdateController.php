<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrderPayment;
use App\ClientOrder;
use DateTime;

class ClientOrderPaymentLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {

        dd('hello');
        $date = new DateTime();
        $order = ClientOrder::where('orderID','=',$request->orderID);
        $orderPayment = new ClientOrderPayment();
        $orderPayment->orderID = $request->orderID;
        $orderPayment->payment_date = date("Y/m/d");
        $orderPayment->payment_type = $request->paymentType;
        $orderPayment->totalAmount = $request->paymentAmount;
        $orderPayment->save();

        return response()->json([
            'orderID'=>$request->orderID,
            'orderDate'=>$orderPayment->payment_date,
            'type'=>$orderPayment->payment_type,
            'payment'=>$orderPayment->totalAmount,
        ]);
    }
}
