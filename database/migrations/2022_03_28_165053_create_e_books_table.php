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
        Schema::create('e_books', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('subject')->nullable();
            $table->string('e_bookName')->nullable();
            $table->string('edition')->nullable();
            $table->string('author');
            $table->string('language')->nullable();
            $table->string('coverImg')->nullable();
            $table->string('e_bookImg')->nullable();
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
        Schema::dropIfExists('e_books');
    }
};
