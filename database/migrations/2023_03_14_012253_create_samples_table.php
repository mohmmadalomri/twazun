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
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lab_id')->nullable();
            $table->unsignedBigInteger('medical_center_id')->nullable();
            $table->string('sending_doctor_name')->nullable();
            $table->string('patient_name')->nullable();
            $table->unsignedBigInteger('patient_file_number')->nullable();
            $table->string('patient_nationality')->nullable();
            ///the result is :
            $table->string('res_doctor_name')->nullable();
            $table->string('res_patient_name')->nullable();
            $table->unsignedBigInteger('res_patient_file_number')->nullable();
            $table->string('res_patient_nationality')->nullable();
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade')->nullable();
            $table->foreign('medical_center_id')->references('id')->on('medical_centers')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samples');
    }
};
