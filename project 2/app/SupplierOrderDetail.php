<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierOrderDetail extends Model
{
    protected $table="BC_Supplier_Order_Detail";

    public function fromSupply(){
        return $this->belongsTo(Supply::class,'supplyID','id');
    }
}
