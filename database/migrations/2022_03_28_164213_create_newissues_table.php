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
        Schema::create('newissues', function (Blueprint $table) {
            $table->id();
            $table->string('book');
            $table->string('isbn')->nullable();
            $table->string('edition')->nullable();
            $table->string('author')->nullable();
            $table->string('language')->nullable();
            $table->bigInteger('qty');
            $table->decimal('price')->nullable();
            $table->string('bookCover')->nullable();
            $table->string('dueDate');
            $table->string('libraryMember')->nullable();
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
        Schema::dropIfExists('newissues');
    }
};
