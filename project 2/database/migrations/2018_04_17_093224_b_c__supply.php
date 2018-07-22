<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BCSupply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BC_Supply', function (Blueprint $table) {
            $table->increments('id');
            $table->date('sp_expiryDate');
            $table->string('sp_name');
            $table->string('sp_desc');
            $table->string('sp_sku');
            $table->integer('sp_qty');
            $table->integer('sp_reorder');
            $table->integer('sp_maxQty');
            $table->string('sp_status');
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
        Schema::dropIfExists('BC_Supply');
    }
}
