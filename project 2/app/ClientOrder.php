<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\ClientOrderDetail;

class ClientOrder extends Model
{
    protected $table="BC_Client_Order";

    public function fromClient(){
        return $this->belongsTo(Client::class,'clientID','id');
    }

    public function fromClientOrderDetail(){
        return $this->hasMany(ClientOrderDetail::class,'orderID','id');//foreign,local key
    }

    public function fromClientOrderPayment(){
        return $this->hasMany(ClientOrderPayment::class,'orderID','id');//foreign,local key
    }

    public function fromSchedule(){
        return $this->hasMany(Schedule::class,'orderID','id'); 
        //--> Not Working Eloquent Will Result to Trying to get property of non-object: SOLVED on July 29, 2018

        //New implementation using DB query.
        // Error on return relationship instance.
        // Explanation: Processing done in the model so the Framework expects the return to be an instance of a certain DB table object.

        // $validate = DB::table('bc_schedule')
        //         ->select('scd_date')
        //         ->where('id', '=', $this->orderID)
        //         ->first();
        // if (!empty($validate)){
        //     return $validate->scd_date;
        // }else{
        //     return "N/A";
        // }
    }

    
}
