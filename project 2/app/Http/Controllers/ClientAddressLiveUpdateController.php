<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\ClientOrder;

use DB;
class ClientAddressLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
        //SECTION FOR CLIENT ORDERS 
        $orderInfo = ClientOrder::where('id','=',$request->orderID)->first();
        $client_orders = [];
        foreach($orderInfo->fromClientOrderDetail as $order){
            if($order->cldt_qty-$order->received>0){
                $push = array(
                    $order->id, $order->orderID, $order->fromProduct->pd_code, $order->cldt_qty-$order->received, $order->productID
                );
                array_push($client_orders,$push);
            }
        }

        //SECTION FOR ADDRESS
        $client = Client::where('id','=',$request->clientID)->first();

        // BUG REPORT EXIST - SPOF for clientLocation Query
        // BY: John Edel B. Tamani
        $clientLocation = DB::table('bc_client_location')
                            ->select('loc_address','loc_contactperson','id')
                            ->where('companyID','=',$client->id)
                            ->get();
        $status = 0;
        if(count($clientLocation)>0){
            $status = 1;
            return response()->json([
                'clientLocation' => $clientLocation,
                'status' => $status,
                'clientorders'=>$client_orders,
            ]);
        }
        return response()->json();
    }
}
