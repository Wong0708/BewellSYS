<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientOrderDetail extends Model
{
    protected $table="BC_Client_Order_Detail";

    public function fromClient(){
        return $this->belongsTo(ClientOrder::class,'orderID','orderID');
    }

    public function fromProduct(){
        return $this->belongsTo(Product::class,'productID','id');
    }

    public function fromProductDetail(){
        return $this->belongsTo(ProductDetails::class,'productID','pd_id');
    }
}
