<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManufacturerOrderDetail;
use App\Product;

class SupplierOrderReceive2LiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
        $count = 0;
        $manufacturerorder=[];
        foreach($request->orders as $order){
            $orderDetail = ManufacturerOrderDetail::where('id','=',$order[0])->first();
            $product = Product::where('pd_name','=',$order[1])->where('pd_sku','=',$order[2])->first();
            if($orderDetail->prod_qty-$orderDetail->received2 >= $order[3]){
                $orderDetail->received2 =  $orderDetail->received2 + $order[3];
                $push = array(
                    $orderDetail->prod_qty-$orderDetail->received2,$orderDetail->received2,$orderDetail->id
                );
                array_push($manufacturerorder,$push);
                $product->pd_qty = $product->pd_qty + $order[3];
                $product->save();
            }
            $orderDetail->save();
            $count = $count + 1;
        }
        return response()->json([
            'count'=>$count,
            'productOrder'=>$manufacturerorder,
        ]);
    }
}
