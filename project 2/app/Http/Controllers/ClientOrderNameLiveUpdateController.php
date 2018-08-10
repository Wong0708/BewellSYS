<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductDetails;
use App\Supply;

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

        //Future Updates:
        //- Delete Similar Products like 101 and 101.
        $productList = [];
        $refList = $request->materialList;
        if(isset($request->materialList)){
            for($i=0;$i<count($refList);$i=$i+1){
                $productData = Product::where('pd_name','=',$refList[$i])->first();
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
            for($i=0;$i<count($productList);$i=$i+1){
                $ingredients = ProductDetails::where('pd_id','=',$productList[$i][0])
                                                ->select('sp_id')
                                                ->get();
                //Target: To filter out similar material list from $ingredients sp_id.
                foreach($ingredients as $info2){
                    $material = Supply::where('id','=',$info2->sp_id)->first();
                    //Loop again to check if the material is present on the list of added material list.
                    if(count($materialNameList)==0){
                        $push = array(
                            $material->sp_name
                        );
                        array_push($materialNameList,$push);
                    }else if (count($materialNameList)>0){
                        foreach($materialNameList as $info3){
                            if($info3[0] != $material->name){
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
        dd($materialNameList);

        //Return Statement of JSON
        if(!empty($product)){
            return response()->json([
                'materialList'=>$materialNameList,
                'product' => $product,
            ]);
        }
    }
}
