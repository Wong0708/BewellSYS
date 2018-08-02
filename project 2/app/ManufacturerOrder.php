<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManufacturerOrder extends Model
{
    protected $table="BC_Manufacturer_Order";

    public function fromManufacturer(){
        return $this->belongsTo(Manufacturer::class,'id','id');
    }
}
