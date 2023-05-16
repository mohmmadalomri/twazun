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
            $table->string('photo')->nullable();
            $table->string('full_name');
            $table->date('date_of_birth')->nullable();
            $table->unsignedBigInteger('n_number')->nullable();
            $table->string('phone_number', 20);
            $table->unsignedBigInteger('file_no')->unique()->default(mt_rand(1, 9999999999))->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->unsignedInteger('height')->nullable();
            $table->unsignedInteger('weight')->nullable();
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'])->nullable();
            $table->string('disease_name')->nullable();
            $table->string('description_disease')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->rememberToken();
            $table->decimal('patient_rate')->nullable();
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->foreign('supervisor_id')->references('id')->on('supervisors')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->nullable();
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
