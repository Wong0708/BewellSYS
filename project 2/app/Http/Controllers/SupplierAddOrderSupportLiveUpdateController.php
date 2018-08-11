<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrder;
use App\ClientOrderDetail;
use App\Product;
use App\ProductDetails;
use App\Supply;

class SupplierAddOrderSupportLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
       $needed_products=[];
       $verify_products=[[]];
       $processed_products=[[]];
       $materialList=[[]];
       $finalList=[[]];
       $clientOrders = ClientOrder::where('clod_status','=','Processing')->get();//get all processing orders
      
       foreach($clientOrders as $order){
            $orderDetail = ClientOrderDetail::where('orderID','=',$order->id)->get();//get all the products of the order
            array_push($needed_products,$orderDetail);
       }

       foreach($needed_products as $products){//get all similar product and come up with a total quantity
            for($j=0;$j<count($products);$j++){
                $holder = count($verify_products);
                if($holder==1){
                    $push = array(
                       $products[$j]->productID,$products[$j]->cldt_qty
                    );
                    array_push($verify_products,$push);
                }else{
                    for($i=1;$i<$holder;$i++){
                        if($products[$j]->productID!=$verify_products[$i][0]){

                            $push2 = array(
                                $products[$j]->productID, $products[$j]->fromProductDetail->pd_sp_qty
                            );
                            array_push($verify_products,$push2);
                        }else{
                            $verify_products[$i][1] = $verify_products[$i][1] + $products[$j]->fromProductDetail->pd_sp_qty;
                        }
                    }
                }
            }
       }

        //will be created for "butal" 
        for($j=1;$j<count($verify_products);$j++){
            $product = Product::where('id','=',$verify_products[$j][0])->first();
            if($verify_products[$j][1]>$product->pd_qty){
                $verify_products[$j][1] = $verify_products[$j][1] - $product->pd_qty;
                $push3 = array(
                    $verify_products[$j][0], $verify_products[$j][1]
                );
                array_push($processed_products,$push3);
            }
       }

       dd($processed_products);

        //start can be created
        //can be created
        //complicated too many butals of permutation and combination
        //ADD ONS:can be created
        //end can be created
        
        for($j=1;$j<count($processed_products);$j++){
            $productDetail = ProductDetails::where('pd_id','=',$processed_products[$j][0])->get();
            foreach($productDetail as $detail){//all the material details of the product
                $holder = count($materialList);
                if($holder==1){
                    $push4 = array(
                        $detail->sp_id,$processed_products[$j][1]
                     );
                     array_push($materialList,$push4);
                }else{
                    $checker = false;
                    for($i=1;$i<$holder;$i++){
                        if($detail->sp_id==$materialList[$i][0]){
                            $materialList[$i][1] = $materialList[$i][1] + $processed_products[$j][1];
                            $checker = true;
                        }
                    }
                    if($checker==false){
                        $push5 = array(
                            $detail->sp_id,$processed_products[$j][1]
                        );
                        array_push($materialList,$push5);
                    }
                }
            }
        }
        
        for($j=1;$j<count($materialList);$j++){
            $material = Supply::where('id','=',$materialList[$j][0])->first();
            $push6 = array(
                $material->sp_name,$materialList[$j][1]
            );
            array_push($finalList,$push6);
        }

        return response()->json([
            'materialOrders'=>$finalList,
        ]);
    }
}
