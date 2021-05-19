<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorPeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicator_period', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('indicator_id');
            $table->unsignedBigInteger('period_id');
            $table->integer('amount')->nullable();
            $table->string('observation')->nullable();

            $table->foreign('indicator_id')->references('id')->on('indicators');
            $table->foreign('period_id')->references('id')->on('periods');
            
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
        Schema::dropIfExists('indicator__period');
    }
}
