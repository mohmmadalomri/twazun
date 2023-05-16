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
        Schema::create('doctor_patient', function (Blueprint $table) {
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->nullable();
            $table->primary(['doctor_id', 'patient_id'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_patient');
    }
};
