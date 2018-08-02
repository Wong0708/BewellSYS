<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supply;

class ManufacturerOrderSKULiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $material = Supply::where('sp_name','=',$request->name)->where('sp_sku','=',$request->sku)->first();
        $status = 0;
        if($material->sp_qty > $material->sp_reorder){
            $status = 1; //In-stock
        }
        else if($material->sp_qty <= $material->sp_reorder && $material->sp_qty > 0){
            $status = 2; //Re-stock
        }else{
            $status = 3; //No Stock
        }
        return response()->json([
            'inventory'=>$material->sp_qty,
            'code'=>$material->sp_code,          
            'status'=>$status,
        ]);
    }
}
