<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ClientOrderNameLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $product = Product::where('pd_name','=',$request->productName)
                    ->select('pd_sku')
                    ->get();
        if(!empty($product)){
            return response()->json([
                'product' => $product,
            ]);
        }
        return response()->json();
    }
}
