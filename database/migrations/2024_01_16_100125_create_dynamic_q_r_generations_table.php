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
        Schema::create('dynamic_q_r_generations', function (Blueprint $table) {
            $table->id();
            $table->string('entityId');
            $table->string('paymentAddress');
            $table->string('channelId');
            $table->string('aggregatorCode');
            $table->string('merchantId');
            $table->string('merchantLegalName');
            $table->string('terminalId');
            $table->string('currencyCode');
            $table->string('mcc');
            $table->string('purpose');
            $table->string('txnAmount');
            $table->string('refId');
            $table->string('result');
            $table->string('qrData');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_q_r_generations');
    }
};
