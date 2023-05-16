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
        Schema::create('admins_medical_centers', function (Blueprint $table) {
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('medical_center_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->nullable();
            $table->foreign('medical_center_id')->references('id')->on('medical_centers')->onDelete('cascade')->nullable();
            $table->primary(['admin_id', 'medical_center_id'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins_medical_centers');
    }
};
