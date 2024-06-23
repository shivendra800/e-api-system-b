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
        Schema::create('pay_online_emi_payments', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name');
            $table->string('cust_mobile');
            $table->string('loan_ac_number');
            $table->string('emi_amt');
            $table->string('current_due');
            $table->string('pay_emi_amt');
            $table->string('payment_mode');
            $table->string('payment_id');
            $table->string('paymet_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pay_online_emi_payments');
    }
};
