<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientOrderDetail extends Model
{
    protected $table="BC_Client_Order_Detail";

    public function fromClient(){
        return $this->belongsTo(ClientOrder::class,'orderID','orderID');
    }
}
