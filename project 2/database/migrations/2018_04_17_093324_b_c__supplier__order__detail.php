<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BCSupplierOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BC_Supplier_Order_Detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderID');
            $table->integer('supplyID');
            $table->integer('spdt_qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BC_Supplier_Order_Detail');
    }
}
