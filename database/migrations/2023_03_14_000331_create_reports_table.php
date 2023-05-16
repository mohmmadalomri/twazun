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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            // $table->string('test')->nullable();
            $table->date('Admission_Date')->default(date('Y-m-d'))->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();;
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('patient_id')->nullable();;
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('doctor_id')->nullable();;
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade')->nullable();
            $table->string('Admission_Diagnosis')->nullable();
            $table->string('Admitting_Staff')->nullable();
            $table->string('Physician')->nullable();
            $table->string('Specialty')->nullable();
            $table->string('Reason_for_THHC')->nullable();
            $table->string('Information_from')->nullable();
            $table->string('Temp')->nullable();
            $table->string('Oral')->nullable();
            $table->string('Ear')->nullable();
            $table->string('Blood_Pressure')->nullable();
            $table->string('Pulse_Rate')->nullable();
            $table->string('Regular')->nullable();
            $table->string('Axillary')->nullable();
            $table->string('Rectal')->nullable();
            $table->string('irregular')->nullable();
            $table->string('Standing')->nullable();
            $table->string('Sitting')->nullable();
            $table->string('Lying')->nullable();
            $table->string('R_Arm')->nullable();
            $table->string('R_Wrist')->nullable();
            $table->string('R_Leg')->nullable();
            $table->string('R_arm1')->nullable();
            $table->string('R_wrist1')->nullable();
            $table->string('R_leg1')->nullable();
            $table->string('Respiration')->nullable();
            $table->string('Oxygen_Saturation')->nullable();
            $table->string('Height')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Actual')->nullable();
            $table->string('Estimated')->nullable();
            $table->string('ALLERGIES')->nullable();
            $table->string('Medication')->nullable();
            $table->string('Pain')->nullable();
            $table->string('reaction_medication')->nullable();
            $table->string('Food')->nullable();
            $table->string('reaction_food')->nullable();
            $table->string('reaction_type_food')->nullable();
            $table->string('reaction_type_medication')->nullable();
            $table->string('signed')->nullable();
            $table->string('signedby')->nullable();
            $table->string('copy_patient')->nullable();
            $table->string('ORIENTATION')->nullable();
            $table->string('THHC_Discharge_plan')->nullable();
            $table->string('Emergency_Telephone_Numbers')->nullable();
            $table->string('THHC_disciplines')->nullable();
            $table->string('Visit_Frequency')->nullable();
            $table->string('Service_Charges')->nullable();
            $table->string('signature')->nullable();
            $table->string('THHC_Working_Hours')->nullable();
            $table->string('Emergency_Plan')->nullable();
            $table->string('admin_name')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('patient_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
