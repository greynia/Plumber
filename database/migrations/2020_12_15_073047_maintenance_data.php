<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaintenanceData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_data', function (Blueprint $table) {
            $table->Integer('id');
            $table->Integer('u_id');
            $table->Integer('p_id');
            $table->String('type');
            $table->String('u_phone');
            $table->String('u_address');
            $table->String('m_detail');
            $table->dateTime('m_time');
            $table->String('w_id');
            $table->Integer('m_price');
            $table->dateTime('m_start');
            $table->dateTime('m_end');
            $table->json('m_state');
            $table->json('m_rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenance_data');
    }
}
