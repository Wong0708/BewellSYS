<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupplierOrder;
use App\SupplierOrderDetail;

class SupplierAddOrderSupportLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
       $needed_products=[];
       $count = 1;
       $supplierOrders = SupplierOrder::where('spod_status','=','Processing')->get();//get all processing orders
       foreach($supplierOrders as $order){
            $orderDetail = SupplierOrderDetail::where('orderID','=',$order->id)->get();//get all the products of the order
            array_push($needed_products,'orderNum'.$count,$orderDetail);
            $count = $count + 1;
       }

       foreach($needed_products as $product){//get all similar supply and total quantity
            
       }
    }
}
