<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrderDetail;
use App\ClientOrderPayment;
class ClientOrderBalancePaymentLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $orders = ClientOrderDetail::where('orderID','=',$request->orderID)->get();
        $orderPayments = ClientOrderPayment::where('orderID','=',$request->orderID)->get();
        $totalOrder = 0;
        $totalPayment = 0;

        if(isset($orders)){
            foreach($orders as $order){
                $totalOrder = $totalOrder + $order->totalPrice;
            }
        }

        if(isset($orderPayments)){
            foreach($orderPayments as $orderPayment){
                $totalPayment = $totalPayment + $orderPayment->totalAmount;
            }
        }

        return response()->json([
            'totalBalance'=>$totalOrder-$totalPayment,
        ]);
    }
}
