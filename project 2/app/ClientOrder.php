<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientOrder extends Model
{
    protected $table="BC_Client_Order";

    public function fromClient(){
        return $this->belongsTo(Client::class,'clientID');
    }
}
