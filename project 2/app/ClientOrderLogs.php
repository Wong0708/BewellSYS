<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientOrderLogs extends Model
{
    protected $table="BC_Client_Order_Logs";
    
    public function fromUser(){
        return $this->belongsTo(User::class,'userID','id');
    }
}
