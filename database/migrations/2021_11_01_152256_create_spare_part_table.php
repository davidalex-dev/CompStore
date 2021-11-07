<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSparePartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spare_part', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('model');
            $table->string('manufacturer');
            $table->string('type');
            $table->integer('price');
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::table('spare_part', function (Blueprint $table){
            $table->primary('id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spare_part');
    }
}
