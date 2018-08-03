<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManufacturerOrderDetail extends Model
{
    protected $table="BC_Manufacturer_Order_Detail";


    public function fromSupply(){
        return $this->belongsTo(Supply::class,'supplyID','id');
    }
    public function fromSupplierOrderDetail(){
        return $this->hasMany(ManufacturerOrderDetail::class,'orderID','id');//foreign,local key
    }
}
