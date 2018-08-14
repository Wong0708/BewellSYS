<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table="bc_schedule";

    public function fromScheduleDetail(){
        return $this->hasMany(ScheduleDetail::class,'scheduleID','id');//foreign,local key
    }

    public function fromTruck(){
        return $this->belongsTo(Truck::class,'truckID','id');//foreign,local key
    }

    public function fromLocation(){
        return $this->belongsTo(ClientLocation::class,'locationID','id');//foreign,local key
    }

    public function fromLocationNumber(){
        return $this->belongsTo(ClientLocation::class,'contactPerson','loc_contactperson');//foreign,local key
    }

    public function fromDriver(){
        return $this->belongsTo(Driver::class,'driverID','id');//foreign,local key
    }
}
