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
        Schema::create('certificatetypes', function (Blueprint $table) {
            $table->id();
            $table->string('certname');
            $table->string('schoolname')->nullable();
            $table->string('certtext')->nullable();
            $table->string('footlefttext')->nullable();
            $table->string('footmidtext')->nullable();
            $table->string('footrighttext')->nullable();
            $table->string('back_img')->nullable();
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
        Schema::dropIfExists('certificatetypes');
    }
};
