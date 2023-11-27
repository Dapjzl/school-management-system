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
        Schema::create('markemails', function (Blueprint $table) {
            $table->id();
            $table->string('exam');
            $table->string('rectype')->nullable();
            $table->string('studmark')->nullable();
            $table->string('subject')->nullable();
            $table->string('emailbody')->nullable();
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
        Schema::dropIfExists('markemails');
    }
};
