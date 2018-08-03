<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\ManufacturerOrder;

use DB;
class ClientAddress2LiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
        //SECTION FOR CLIENT ORDERS 
        $orderInfo = ManufacturerOrder::where('id','=',$request->orderID)->first();
        $client_orders = [];
        foreach($orderInfo->fromManufacturerOrderDetail as $order){
            if($order->mndt_qty-$order->received>0){
                $push = array(
                    $order->id, $order->orderID, $order->fromSupply->sp_code, $order->mndt_qty-$order->received, $order->supplyID
                );
                array_push($client_orders,$push);
            }
        }

        //SECTION FOR ADDRESS
        $client = Manufacturer::where('id','=',$request->clientID)->first();

        // BUG REPORT EXIST - SPOF for clientLocation Query
        // BY: John Edel B. Tamani
       
        return response()->json([
            'clientLocation' => $client->mn_address,
            'contactPerson' => $client->mn_contactperson,
            'clientorders'=>$client_orders,
        ]);
        
    }
}
