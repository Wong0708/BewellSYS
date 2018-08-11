<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManufacturerOrderLogs extends Model
{
    protected $table="BC_Manufacturer_Order_Logs";

    public function fromUser(){
        return $this->belongsTo(User::class,'userID','id');
    }
}
