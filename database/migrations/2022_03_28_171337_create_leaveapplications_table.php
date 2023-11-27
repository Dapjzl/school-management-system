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
        Schema::create('leaveapplications', function (Blueprint $table) {
            $table->id();
            $table->string('applicantType');
            $table->string('applicant');
            $table->string('leaveType')->nullable();
            $table->string('leaveFrom');
            $table->string('leaveTo');
            $table->string('status');
            $table->string('leaveReason');
            $table->string('leaveAttach')->nullable();
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
        Schema::dropIfExists('leaveapplications');
    }
};
