<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ClientOrder;
use App\ClientOrderDetail;
use App\Client;
use DateTime;

class ClientAddOrderLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
        $json_orders = [];
        $date = new DateTime();
        $client = Client::where('cl_name','=',$request->clientInfo[0][0])->first();

        $orderList = $request->orderList;

        $new_order = new ClientOrder();
        $new_order->clientID = $client->id;
        $new_order->expectedDate = $request->clientInfo[0][1];
        $new_order->clod_date = date("Y/m/d");
        $new_order->clod_pstatus = 'Pending';
        $new_order->clod_status = 'Processing';
        $new_order->created_at = $date->getTimestamp();
        $new_order->updated_at = $date->getTimestamp();
        $new_order->save();

        $count = 1;
        foreach($orderList as $order){
            $new_order_detail = new ClientOrderDetail();
            $new_order_detail->orderID = $new_order->id;

            $product = Product::where('pd_name','=',$order[0])
                        ->where('pd_sku','=',$order[1])
                        ->first();
            $new_order_detail->productID = $product->id;
            $new_order_detail->cldt_qty = $order[2];
            $new_order_detail->totalPrice = $product->pd_price * $order[2];

            if($order[2]>$product->pd_qty){
                $product->pd_allocated = $product->pd_allocated+($order[2]-$product->pd_qty);
                $product->pd_qty = 0;
                $product->save();
            }else if($order[2]<=$product->pd_qty){
                $product->pd_qty = $product->pd_qty-$order[2];
                $product->save();
            }
            // $new_order_detail->adrDelivery = $request->clientDetail[0][1];
            $new_order_detail->created_at = $date->getTimestamp();
            $new_order_detail->updated_at = $date->getTimestamp();
            $new_order_detail->save();
            array_push($json_orders,'orderNum'.$count,$new_order_detail);
            $count = $count + 1;
        }        
        return response()->json([
            'processed_orders' => $json_orders,
        ]);
    }
}
