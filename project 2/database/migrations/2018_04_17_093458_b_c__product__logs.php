<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BCProductLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BC_Product_Logs', function (Blueprint $table) {
            $table->increments('query_id');
            $table->integer('userID');
            $table->timestamp('query_date');
            $table->string('query_type');
            $table->string('id');
            $table->string('pd_expiryDate');
            $table->string('pd_name');
            $table->string('pd_desc');
            $table->string('pd_sku');
            $table->string('pd_qty');
            $table->string('pd_reorder');
            $table->string('pd_maxQty');
            $table->string('pd_price');
            $table->string('pd_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BC_Product_Logs');
    }
}
