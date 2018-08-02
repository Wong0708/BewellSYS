<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table="BC_Client";

    public function fromClientDetail(){
        return $this->belongsTo(Client::class,'cl_id','id');
    }
}
