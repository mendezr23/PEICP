<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateQuadrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadrants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->text('nomenclature');
            $table->double('area');
            $table->double('perimeter');
            $table->unsignedBigInteger('region_id')->nullable();
            $table->string('state');
            $table->unsignedBigInteger('axi_id')->nullable();
            $table->unsignedBigInteger('municipality_id')->nullable();
            $table->string('parish');
            $table->string('town');
            $table->longText('sector');
            
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('organism_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('region_id')->references('id')->on('regions')->onDelete('set null');
            $table->foreign('axi_id')->references('id')->on('axis')->onDelete('set null');
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('set null');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            $table->foreign('organism_id')->references('id')->on('organisms')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

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
        Schema::dropIfExists('quadrants');
    }
}
