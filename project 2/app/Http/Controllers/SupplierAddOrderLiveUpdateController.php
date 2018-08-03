<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Supply;
use App\SupplierOrder;
use App\SupplierOrderDetail;
use DateTime;

class SupplierAddOrderLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
        $json_orders = [];
        $date = new DateTime();
        $supplier = Supplier::where('sp_name','=',$request->supplierInfo[0][0])->first();
        $orderList = $request->orderList;

        $new_order = new SupplierOrder();
        $new_order->supplierID= $supplier->id;
        $new_order->spod_date = date("Y/m/d");
        $new_order->spod_status = 'Processing';
        $new_order->spod_completed = null;
        $new_order->spod_payment =$request->supplierInfo[0][2] ;
        $new_order->spod_expected  = $request->supplierInfo[0][1];
        $new_order->created_at = $date->getTimestamp();
        $new_order->updated_at = $date->getTimestamp();
        $new_order->save();

        foreach($orderList as $order){
            $new_order_detail = new SupplierOrderDetail();
            $new_order_detail->orderID = $new_order->id;

            $material = Supply::where('sp_name','=',$order[0])
                        ->where('sp_sku','=',$order[1])
                        ->first();

            $new_order_detail->supplyID = $material->id;
            $new_order_detail->spdt_qty = $order[2];
            $new_order_detail->received = 0;
            $new_order_detail->created_at = $date->getTimestamp();
            $new_order_detail->updated_at = $date->getTimestamp();
            $new_order_detail->save();
        }        

        return response()->json([
        ]);
    }
}
