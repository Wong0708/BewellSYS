<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierOrder extends Model
{
    protected $table="BC_Supplier_Order";

    public function fromSupplier(){
        return $this->belongsTo(Supplier::class,'supplierID','id');
    }

    public function fromSupplierOrderDetail(){
        return $this->hasMany(SupplierOrderDetail::class,'orderID','id');//foreign,local key
    }
}
