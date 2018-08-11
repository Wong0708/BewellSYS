<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierOrderLogs extends Model
{
    protected $table="BC_Supplier_Order_Logs";
    
    public function fromUser(){
        return $this->belongsTo(User::class,'userID','id');
    }
}
