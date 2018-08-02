<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrderPayment;
use App\ClientOrderDetail;
use App\ClientOrder;
use DateTime;

class ClientOrderPaymentLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $date = new DateTime();
        $orderPayment = new ClientOrderPayment();
        $orderPayment->orderID = $request->orderID;
        $orderPayment->payment_date = date("Y-m-d");
        $orderPayment->payment_type = $request->paymentType;
        $orderPayment->totalAmount = $request->paymentAmount;
        $orderPayment->save();

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
            'id'=>$orderPayment->id,
            'orderID'=>$request->orderID,
            'orderDate'=>$orderPayment->payment_date,
            'type'=>$orderPayment->payment_type,
            'payment'=>$orderPayment->totalAmount,
        ]);
    }
}
