<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierOrder extends Model
{
    protected $table="BC_Supplier_Order";
    public function fromSupplier(){
        return $this->belongsTo(Supplier::class,'supplierID','id');
    }
}
