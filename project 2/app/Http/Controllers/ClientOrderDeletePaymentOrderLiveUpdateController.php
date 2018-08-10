<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientOrderPayment;
use App\ClientOrderLogs;
use DateTime;

class ClientOrderDeletePaymentOrderLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request)
    {

        //Initialization of Variables.
        $date = new DateTime();

        //For the logic of the order Logs.
        $logs = new ClientOrderLogs();
        $logs->userID= auth()->user()->id;
        $logs->query_date= date('Y-m-d H:i:s');
        $logs->query_type= 'Insert';
        $logs->notification= 'Payment of '.$request->value. 'was cancelled!';
        $logs->created_at= $date->getTimestamp();
        $logs->updated_at= $date->getTimestamp();
        $logs->save();

        $product = ClientOrderPayment::destroy($request->id);
        return response()->json();
    }
}
