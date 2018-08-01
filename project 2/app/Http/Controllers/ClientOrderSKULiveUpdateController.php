<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ClientOrderSKULiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $status = 0;
        $product = Product::where('pd_name','=',$request->productName)->where('pd_sku','=',$request->productSKU)->first();
        if(!empty($product->pd_qty)){
            if($product->pd_qty > $product->pd_reorder){
                $status = 1; //In-stock
            }
            else if($product->pd_qty <= $product->pd_reorder && $product->pd_qty > 0){
                $status = 2; //Re-stock
            }else{
                $status = 3; //No Stock
            }
            return response()->json([
                'inventory' => $product->pd_qty,
                'status' => $status,
                'productCode' => $product->pd_code,
                'price' => $product->pd_price,
                ]
            );
        }
        return response()->json();
    }
}
