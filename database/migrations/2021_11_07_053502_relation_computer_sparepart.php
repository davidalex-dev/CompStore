<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationComputerSparepart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('computer', function (Blueprint $table) {
            $table->foreign('chassis')
            ->references('id')
            ->on('spare_part')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('motherboard')
            ->references('id')
            ->on('spare_part')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('cpu')
            ->references('id')
            ->on('spare_part')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('gpu')
            ->references('id')
            ->on('spare_part')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('ram')
            ->references('id')
            ->on('spare_part')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('storage')
            ->references('id')
            ->on('spare_part')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('power')
            ->references('id')
            ->on('spare_part')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('computer', function (Blueprint $table) {
            //
        });
    }
}
