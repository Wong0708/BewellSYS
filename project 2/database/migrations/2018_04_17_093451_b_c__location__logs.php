<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BCLocationLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BC_Location_Logs', function (Blueprint $table) {
            $table->increments('query_id');
            $table->integer('userID');
            $table->timestamp('query_date');
            $table->string('query_type');
            $table->string('id');
            $table->string('companyID');
            $table->string('loc_address');
            $table->string('loc_email');
            $table->string('loc_contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BC_Location_Logs');
    }
}
