<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\Supply;
use App\Product;
use App\ManufacturerOrder;
use App\ManufacturerOrderDetail;
use App\ManufacturerOrderLogs;
use DateTime;

class ManufacturerAddOrderLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
        $json_orders = [];
        $date = new DateTime();
        $manufacturer = Manufacturer::where('mn_name','=',$request->manufacturerInfo[0][0])->first();
        $orderList = $request->orderList;
        $orderList2 = $request->orderList2;

        $new_order = new ManufacturerOrder();
        $new_order->manufacturerID= $manufacturer->id;
        $new_order->mnod_date = date("Y/m/d");
        $new_order->mnod_status = 'Processing';
        $new_order->mnod_completed = null;
        $new_order->mnod_payment =$request->manufacturerInfo[0][2] ;
        $new_order->mnod_expected  = $request->manufacturerInfo[0][1];
        $new_order->created_at = $date->getTimestamp();
        $new_order->updated_at = $date->getTimestamp();
        $new_order->save();

        $count = 0;
        foreach($orderList as $order){
            $new_order_detail = new ManufacturerOrderDetail();
            $new_order_detail->orderID = $new_order->id;

            $material = Supply::where('sp_name','=',$order[0])
                        ->where('sp_sku','=',$order[1])
                        ->first();

            $new_order_detail->supplyID = $material->id;
            $new_order_detail->mndt_qty = $order[2];

            $new_order_detail->created_at = $date->getTimestamp();
            $new_order_detail->updated_at = $date->getTimestamp();
            $new_order_detail->productID = null;
            $new_order_detail->prod_qty= null;
            $new_order_detail->received2= 0;

            $new_order_detail->save();

            foreach($orderList2 as $order){

                $product = Product::where('pd_name','=',$order[0])
                                    ->where('pd_sku','=',$order[1])
                                    ->first();
                $new_order_detail->productID = $product->id;
                $new_order_detail->prod_qty= $order[2];
                $new_order_detail->save();
            }
            $count = $count + 1;
        }      
        $logs = new ManufacturerOrderLogs();
        $logs->manufacturerID=$new_order->id;
        $logs->userID= auth()->user()->id;
        $logs->query_date= date('Y-m-d H:i:s');
        $logs->query_type= 'Insert';
        $logs->notification=  $request->paymentType.' Payment Amount of PHP'.  $request->manufacturerInfo[0][2].' has been added!';
        $logs->created_at= $date->getTimestamp();
        $logs->updated_at= $date->getTimestamp();
        $logs->save();

        return response()->json([
            'order'=>$new_order,
            'manufacturer'=>$manufacturer->mn_name,
        ]);
    }
}
