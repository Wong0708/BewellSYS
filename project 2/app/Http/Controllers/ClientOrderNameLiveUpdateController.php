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

        //Logic for the loop on the live material list updated based on product ordered.
        //Note: The algorithm for this is pretty greedy. Memory Lost!
        //Process is looping again and again until it finish a product.
        //Done by: PrivateAirJET
        $productList = [];
        if(isset($request->materialList)){
            foreach($request->materialList as $info){
                $productData = Product::where('pd_name','=',$info[0])->first();
                $push = array(
                    $productData->id
                );
                array_push($productList,$push);
            }
        }

        //Logic for Material Order List Update
        //Done by: PrivateAirJET
        $materialNameList =  [];
        if(isset($productList)){
            foreach($productMaterialList as $info){
                $product = Product::where('pd_name','=',$info[0])->first();
                $material = Material::where('id','=',$product->sp_id)->first();
                $push = array(
                    $material->sp_name
                );
                array_push($materialNameList,$push);
            }
        }

        return response()->json([
            'materialList'=>$materialNameList,
        ]);
    }
}
