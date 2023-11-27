<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examschedules', function (Blueprint $table) {
            $table->id();
            $table->string('examtype');
            $table->string('class')->nullable();
            $table->string('subject');
            $table->date('examdate');
            $table->time('starttime')->nullable();
            $table->time('endtime')->nullable();
            $table->string('roomno')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('examschedules');
    }
};
