<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManufacturerOrder extends Model
{
    protected $table="BC_Manufacturer_Order";

    public function fromClient(){
        return $this->belongsTo(Manufacturer::class,'manufacturerID');
    }
}
