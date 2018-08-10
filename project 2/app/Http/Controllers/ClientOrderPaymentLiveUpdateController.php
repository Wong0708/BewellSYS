<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrderPayment;
use App\ClientOrderDetail;
use App\ClientOrderLogs;
use App\ClientOrder;
use DateTime;

class ClientOrderPaymentLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        //Initialization of variables here.
        $date = new DateTime();
        $orderPayment = new ClientOrderPayment();
        $orderPayment->orderID = $request->orderID;
        $orderPayment->payment_date = date("Y-m-d");
        $orderPayment->payment_type = $request->paymentType;
        $orderPayment->totalAmount = $request->paymentAmount;
        $orderPayment->save();

        // For processing on the view side.
        $orders = ClientOrderDetail::where('orderID','=',$request->orderID)->get();
        $orderPayments = ClientOrderPayment::where('orderID','=',$request->orderID)->get();
        $totalOrder = 0;
        $totalPayment = 0;


        //Logic to check the remaining blance for the specific order before update to complete,
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

        $logs = new ClientOrderLogs();
        $logs->userID= auth()->user()->id;
        $logs->query_date= date('Y-m-d H:i:s');
        $logs->query_type= 'Insert';
        $logs->notification=  $request->paymentType.' Payment Amount of PHP'.  $request->paymentAmount.' has been added!';
        $logs->created_at= $date->getTimestamp();
        $logs->updated_at= $date->getTimestamp();
        $logs->save();


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
