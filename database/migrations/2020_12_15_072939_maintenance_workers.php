<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaintenanceWorkers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_workers', function (Blueprint $table) {
            $table->Integer('w_id');
            $table->String('id_card_number');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->string('occupation');
            $table->string('phone');
            $table->json('rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
