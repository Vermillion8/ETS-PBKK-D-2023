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
        Schema::create('medical_record', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('patient_ssn');
            $table->string('doctor_name');
            $table->string('doctor_ssn');
            $table->string('illness');
            $table->float('temperature');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_record');
    }
};
