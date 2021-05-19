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
            $table->text('region');
            $table->string('state');
            $table->string('axis');
            $table->string('municipality');
            $table->string('parish');
            $table->string('town');
            $table->longText('sector');
            
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('organism_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

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
