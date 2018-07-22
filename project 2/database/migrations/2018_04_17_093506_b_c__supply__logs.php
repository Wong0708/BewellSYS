<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BCSupplyLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BC_Supply_Logs', function (Blueprint $table) {
            $table->increments('query_id');
            $table->integer('userID');
            $table->timestamp('query_date');
            $table->string('query_type');
            $table->string('id');
            $table->string('sd_expiryDate');
            $table->string('sd_name');
            $table->string('sd_desc');
            $table->string('sd_sku');
            $table->string('sd_qty');
            $table->string('sd_reorder');
            $table->string('sd_maxQty');
            $table->string('sd_price');
            $table->string('sd_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BC_Supply_Logs');
    }
}
