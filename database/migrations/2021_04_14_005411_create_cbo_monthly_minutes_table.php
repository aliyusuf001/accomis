<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCboMonthlyMinutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbo_monthly_minutes', function (Blueprint $table) {
            $table->id();
            $table->string('cbo_name');
            $table->string('state');
            $table->string('lga');
            $table->string('date_of_meeting');
            $table->string('attachment');
            $table->longText('minutes_of_meeting');
            $table->string('month');
            $table->string('year');
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
        Schema::dropIfExists('cbo_monthly_minutes');
    }
}
