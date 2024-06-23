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
        Schema::create('mc_mandate_qrs', function (Blueprint $table) {
            $table->id();
            $table->string('entityId');
            $table->string('paymentAddress');
            $table->string('aggregatorCode');
            $table->string('merchantId');
            $table->string('terminalId');
            $table->string('mandateName');
            $table->string('validityStart');
            $table->string('validityEnd');
            $table->string('amount');
            $table->string('amountRule');
            $table->string('recur');
            $table->string('recurValue');
            $table->string('recurType');
            $table->string('channelId');
            $table->string('mandateType');
            $table->string('txnNote');
            $table->string('refId');
            $table->string('mconboarding_id');
            $table->string('res_txnid');
            $table->string('res_mandateqrdata');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mc_mandate_qrs');
    }
};
