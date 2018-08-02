<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supply;

class ManufacturerOrderNameLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {
        $material = Supply::where('sp_name','=',$request->name)->select('sp_sku')->get();
        return response()->json([
            'sku'=>$material,
        ]);
    }
}
