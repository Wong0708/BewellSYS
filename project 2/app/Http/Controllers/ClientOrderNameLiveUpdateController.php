<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductDetails;
use App\Material;

class ClientOrderNameLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        //General Logic for Product SKU live update here at Manufacturer Order.
        //By: PrivateAirJET

        $product = Product::where('pd_name','=',$request->productName)
                    ->select('pd_sku')
                    ->get();
        if(!empty($product)){
            return response()->json([
                'product' => $product,
            ]);
        }

        //Logic for Material Order List Update
        //Done by: PrivateAirJET

        $materialNameList =  [];

        $productMaterialList = ProductDetails::where('pd_id','=',$product->id)->get();
        if(isset($productMaterialList)){
            foreach($i=0;$i<count($productMaterialList);$i=$i+1){

            }
        }
        $push = array(
            
        );

        array_push($materialList,$push);
        return response()->json([
            'materialList'=>$materialNameList,
        ]);
    }
}
