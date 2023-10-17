<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phonenumber');
            $table->string('email');
            $table->integer('id_number');
            $table->string('county');
            $table->string('subcounty');
            $table->string('location');
            $table->string('village');
            $table->date('dob');
            $table->string('gender');
            $table->string('gurd_name');
            $table->string('gurd_number');
            $table->string('gurd_alt_phone')->nullable();
            $table->string('locator_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
