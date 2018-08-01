<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use DB;
class ClientAddressLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {   
        $client = Client::where('cl_name','=',$request->clientName)->first();
        
        // BUG REPORT EXIST - SPOF for clientLocation Query
        // BY: John Edel B. Tamani
        $clientLocation = DB::table('bc_client_location')
                            ->select('loc_address')
                            ->where('companyID','=',$client->id)
                            ->get();
        $status = 0;
        if(count($clientLocation)>0){
            $status = 1;
            return response()->json([
                'clientLocation' => $clientLocation,
                'status' => $status,
            ]);
        }
        return response()->json();
    }
}
