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

        //Logic for the loop on the live material list updated based on product ordered.
        //Note: The algorithm for this is pretty greedy. Memory Lost!
        //Process is looping again and again until it finish a product.
        //Retrieves all the name of the order then find it here and save the id.
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
    
        //Logic for Product Details and retrieve the materials needed.
        //Loop the id here and retrieve the ingredients.
        //Done by: PrivateAirJET.
        $materialNameList = [];
        if(isset($productList)){
            foreach($productList as $info){
                $ingredients = ProductDetails::where('pd_id','=',$info[0])->get();
                foreach($ingredients as $info2){
                    $material = Material::where('id','=',$info2->sp_id)->first();
                    //Loop again to check if the material is present on the list of added material list.
                    if(count($materialNameList)==0){
                        foreach($materialNameList as $info3){
                            if($info3 != $material->name){
                                $push = array(
                                    $material->sp_name
                                );
                                array_push($materialNameList,$push);
                            }
                        }
                    }
                }
            }
        }

        //Return Statement of JSON
        if(!empty($product)){
            return response()->json([
                'materialList'=>$materialNameList,
                'product' => $product,
            ]);
        }
    }
}
