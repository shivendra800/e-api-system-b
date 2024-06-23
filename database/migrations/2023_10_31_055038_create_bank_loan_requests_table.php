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
        Schema::create('bank_loan_requests', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_name');
            $table->string('mobile_no');
            $table->string('email');
            $table->longText('address');
            $table->string('pincode');
            $table->string('loan_req_reason');
            $table->longText('sign_borrower');
            $table->longText('upload_aadhar');
            $table->longText('upload_pancard');
            $table->string('date');
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_loan_requests');
    }
};
