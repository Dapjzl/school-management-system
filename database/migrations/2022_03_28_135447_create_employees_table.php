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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('NIN')->nullable();
            $table->string('designation');
            $table->string('emp_type');
            $table->string('phone');
            $table->string('gender');
            $table->string('blood')->nullable();
            $table->string('religion')->nullable();
            $table->string('dob')->nullable();
            $table->string('address');
            $table->string('email');
            $table->bigInteger('salary')->nullable();
            $table->string('salary_grade')->nullable();
            $table->string('salary_type')->nullable();
            $table->string('resume')->nullable();
            $table->string('degree')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('others')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
