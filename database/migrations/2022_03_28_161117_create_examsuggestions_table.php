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
        Schema::create('examsuggestions', function (Blueprint $table) {
            $table->id();
            $table->string('suggesttit');
            $table->string('exam')->nullable();
            $table->string('class')->nullable();
            $table->string('subject');
            $table->string('suggest_img')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('examsuggestions');
    }
};
