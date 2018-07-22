<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BCManufacturerLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BC_Manufacturer_Location', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('companyID');
            $table->string('loc_address');
            $table->string('loc_email');
            $table->string('loc_contact');
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
        Schema::dropIfExists('BC_Manufacturer_Location');
    }
}
