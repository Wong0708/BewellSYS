<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleDetail extends Model
{
    protected $table="bc_schedule_detail";

    public function fromProduct(){
        return $this->belongsTo(Product::class,'productID','id');
    }
}
