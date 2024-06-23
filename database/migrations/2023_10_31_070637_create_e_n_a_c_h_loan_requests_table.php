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
        Schema::create('e_n_a_c_h_loan_requests', function (Blueprint $table) {
            $table->id();
            $table->string('entityId')->default('centralbank');
            $table->string('branch_id');
            $table->string('merchantLegalName');
            $table->string('mobileNo');
            $table->string('email');
            $table->string('aadhar_no');
            $table->string('merchantAccountNo');
            $table->string('Ifsc');
            $table->string('accountType');
            $table->string('emi_amount');
            $table->string('validityStart');
            $table->string('validityEnd');
            $table->string('isVerified')->default('N');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_n_a_c_h_loan_requests');
    }
};
