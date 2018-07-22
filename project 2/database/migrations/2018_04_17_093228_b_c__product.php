<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BCProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BC_Product', function (Blueprint $table) {
            $table->increments('id');
            $table->date('pd_expiryDate');
            $table->string('pd_name');
            $table->string('pd_desc');
            $table->string('pd_sku');
            $table->integer('pd_qty');
            $table->integer('pd_reorder');
            $table->integer('pd_maxQty');
            $table->integer('pd_price');
            $table->string('pd_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BC_Product');
    }
}
