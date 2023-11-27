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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('dob');
            $table->string('gender');
            $table->string('NIN')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('admitdate')->nullable();
            $table->string('admitno')->nullable();
            $table->string('religion')->nullable();
            $table->string('student_img')->nullable();
            $table->string('parentfirst')->nullable();
            $table->string('parentlast')->nullable();
            $table->string('parentdob')->nullable();
            $table->string('parentphone')->nullable();
            $table->string('parentprof')->nullable();
            $table->string('parentgender')->nullable();
            $table->string('parentaddr')->nullable();
            $table->string('guarfirst')->nullable();
            $table->string('guarlast')->nullable();
            $table->string('guardob')->nullable();
            $table->string('guargender')->nullable();
            $table->string('guarphone')->nullable();
            $table->string('guarprof')->nullable();
            $table->string('guaradd')->nullable();
            $table->string('studtype')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('group')->nullable();
            $table->string('rollno')->nullable();
            $table->string('regno');
            $table->string('discount')->nullable();
            $table->string('seclang')->nullable();
            $table->string('prevschool')->nullable();
            $table->string('prevclass')->nullable();
            $table->string('transfercertificate')->nullable();
            $table->string('nationalty')->nullable();
            $table->string('address')->nullable();
            $table->string('postal')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('bsc')->nullable();
            $table->string('waec')->nullable();
            $table->string('first_choice')->nullable();
            $table->string('second_choice')->nullable();
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('students');
    }
};
